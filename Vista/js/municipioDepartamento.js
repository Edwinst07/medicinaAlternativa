
$(document).ready(function(){
            $("#selectDep").change(function(){
                let aid = $("#selectDep").val();
                $('#selectMun').load('Vista/Modulos/sucursales.php?idDep='+aid,
                function(municipio){
                    municipio = JSON.parse(municipio);
                     $('#selectMun').empty();
                     $('#selectMun').append('<option value="">Municipio</option>');
                     municipio.forEach(function(munic){
                        $('#selectMun').append('<option value="' + munic.idMunicipio + '">'+ munic.nombre +'</option>');
                     })
                });

                //console.log(aid);
                //  $.ajax({
                //      url: 'Vista/Modulos/sucursales.php?idDep='+aid,
                //      method: 'post',
                //      //data: 'idDep' + aid
                //  }).done(function(municipio){
                //      municipio = JSON.parse(municipio);
                //      $('#selectMun').empty();
                //      $('#selectMun').append('<option value="">Municipio</option>');
                //      municipio.forEach(function(munic){
                //         $('#selectMun').append('<option value="' + munic.idMunicipio + '">'+ munic.nombre +'</option>');
                //      });
                //  });
            });
        });