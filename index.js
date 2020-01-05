$(document).ready(function () {
   $('#search_field').on('keyup',function (e) {
       //on affiche le titre au dessus qui est caché
       $('#title').prop('hidden',false);

       //on rajoute le texte entré dans le titre
       $('#search-text').text(`"${e.target.value}"`);

       //requête ajax
       $.ajax({
           url:'/server.php',
           type:'POST',
           data:{search_field:e.target.value},
           success:function (res) {
               $('#data').html(res);
           },
           error:function (err) {
               console.error(err.message)
           }
       })
   })
});