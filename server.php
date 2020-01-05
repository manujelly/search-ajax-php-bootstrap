<?php
include 'db.php';

function parseMessage($id,$name){
    return '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                </tr>';
}
function search(){
    if ($_POST['search_field']){
        try{
            $database=new mysqli(hostname,username,password,db);

            $sql='SELECT * FROM '.table.' WHERE '.column.' LIKE("%'.$_POST['search_field'].'%")';
            $query=$database->query($sql);
        }
        catch (Exception $e){
            die($e->getMessage());
        }

        if ($query->num_rows>0){
            foreach ($query->fetch_all() as $item){
                //modifier les index afin de faire correspondre tes données
                // avec celle de la base de données
                echo parseMessage($item[0],$item[3]);
            }
        }
        else{
            echo "<h4 class='display-4'>Aucun resultat ne correspond à votre recherche</h4>";
        }

        $database->close();

    }

}

search();

