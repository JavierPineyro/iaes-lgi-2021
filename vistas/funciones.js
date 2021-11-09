    
    <script>
    

    function mostrar() {
        var d = document.getElementById('discapacidad');
        var dtext = document.getElementById('discesp');
        var e = $("#discesp").val();

        if (document.getElementById('discsi').checked) {
            d.style.display = 'block';            
        }else{
            d.style.display = 'none';
            $("#discesp").val('');
        } 

    }     
   
    function vehiculo() {
        var v = document.getElementById('auto');
        if (document.getElementById('licsi').checked) {
            v.style.display = 'block';
        }else{
            v.style.display = 'none';
            document.getElementById("vsi").checked = false;
            document.getElementById("vno").checked = false;
            var auto = document.getElementsByName("auto");
            auto.value = 0;
        }        
    }  

    </script>
 
