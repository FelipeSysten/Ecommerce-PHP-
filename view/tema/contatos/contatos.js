$(document).ready
(
    function()
    {  
        $('#btnenviar').click
        (
            function(e)
            {   
                $inNome     =$('#txtinputnome');
                $inEmail    =$('#txtinputemail');
                $inAssunto  =$('#txtinputassunto');
                $inArea     =$('#txtinputarea');
                $btnEnviar  =$('#btnenviar');
                
                var emailformat = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                var latinformat=/[^a-zA-Z\-\'\ ��������������������������������������������������������������]/i;
                
                if($inNome.val().length<=2 || latinformat.test($inNome.val()))
                {
                    e.preventDefault();
                    $('#txtinputnome + span').toggle().html("Informe um nome v�lido !");
                    $inNome.focus();                 
                }
                else if(!emailformat.test($inEmail.val()))
                {
                    e.preventDefault();
                    $('#txtinputemail + span').toggle().html("Informe um e-mail v�lido !");
                    $inEmail.focus();                 
                }
                else if($inAssunto.val().length<=2 || !latinformat.test($inAssunto.val()))
                {
                    e.preventDefault();
                    $('#txtinputassunto + span').toggle().html("Informe um assunto v�lido !");
                    $inAssunto.focus();                 
                }
                else if($inArea.val().length<=2 || !latinformat.test($inArea.val()))
                {
                    e.preventDefault();
                    $('#txtinputarea + span').toggle().html("Informe uma mensagem v�lida !");
                    $inArea.focus();                 
                }
            }            
        )
    }
);