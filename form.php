<html>
<head><meta name="robots" content="noindex,nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="icon" type="image/png" href="/Imagenes/favicon.ico">
<title>Formulario vía emBluemail</title>
<style>
body, input {font-family: Helvetica, sans-serif; font-size: 12px; font-weight: lighter; color: #777;}
.cabecera {width: 100%; height:50px; background-color:#3797f7; margin: 0px auto; 
    text-align:center; font-size:16px; line-height:50px; color:#ffffff;}
.cuerpo {border-width: 1px; border-color: #e5e5e5; border-style: none solid solid solid; 
    background-color: #f5f5f5; padding: 25px 0px 30px 0px;}
.marco {padding: 0 50px 0 50px;}
.formulario {width: 100%;}
.formulario tr.campo td { padding: 6px 0; }
.formulario td p {text-align:right; line-height: 12px; alignment-baseline:middle;
font-size: 12px !important; font-weight: lighter !important; }
.formulario input, select { border: solid 1px #999; min-height: 22px; min-width:200px; 
    line-height: 22px; padding: 0px 5px; color: #999; font-size: 12px; border-radius: 2px; 
    white-space: nowrap; text-decoration: none; color:#333; margin-left:5px; background-color:#ffffff;
}
input[type="submit"] {
    display: inline-block; border: solid 1px #1c83ea; min-height: 34px; 
    line-height: 34px; padding: 0px 20px; background-color: #3797f7; color: #FFFFFF; 
    font-size: 14px; font-weight: 200; border-radius: 3px; white-space: nowrap; 
    text-decoration: none; margin-top: 20px; }
.leyenda{padding-top: 15px; text-align: center; font-size: 11px;}
.leyenda a {color: #3366cc; text-decoration: none; alignment-adjust:central;}
.txt-cap {text-transform: capitalize;}
.error { color: #8A0808; font-size: 11px; margin-right: 40px; }
</style>


</head><body><div style="overflow: hidden;">
    <div>
        <div style="width: 500px; margin: 0px auto;">
            <!--CABECERA-->
            <div class="cabecera">Complete aquí sus datos</div>
            <!--CUERPO--> 
            <div class="cuerpo">
            <!--FORMULARIO--> 
            <div class="marco">
            <form method="GET" action="https://app.embluemail.com//Online/TriggerUrlExterna.aspx" onsubmit="return validateForm();" novalidate="">
            <input type="hidden" name="key" value="05e2f0b4-bfe0-424e-802b-a3f412bcb119">
            <table class="formulario campos">
                <tbody>
                    <tr class="campo">
                        <td><p>Email *</p></td>
                        <td><input id="email" type="email" placeholder="miemail@miemail.com" name="email" required="" data-error="Campo requerido|Formato inválido"></td>
                    </tr>
                    <tr class="error-email">
                        <td colspan="2" style="text-align: right;"></td>
                    </tr>
                <tr id="campo-369032" class="campo">
    <td>
        <p class="txt-cap">nombre&nbsp;<span class="req">*</span></p>
    </td>
    <td><input id="369032" type="text" name="369032" data-error="Campo requerido|Formato inválido" required=""></td>
</tr>
<tr class="error-369032">
    <td colspan="2" style="text-align: right;"></td>
</tr><tr id="campo-369033" class="campo">
    <td>
        <p class="txt-cap">apellido&nbsp;<span class="req">*</span></p>
    </td>
    <td><input id="369033" type="text" name="369033" data-error="Campo requerido|Formato inválido" required=""></td>
</tr>
<tr class="error-369033">
    <td colspan="2" style="text-align: right;"></td>
</tr></tbody>
            </table>
            <table class="formulario">
                <tbody><tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="Confirmar" datos="">
                    </td>
                </tr>
            </tbody></table>
            </form>
            </div>
            <!--FIN FORMULARIO--> 
        </div>
        <!--FIN CUERPO--> 
        <!--LEYENDA-->    
        <div class="leyenda">
            Formulario creado a través de 
            <a href="http://www.embluemail.com" target="_blank">emBluemail</a>.
        </div>
        <!--FIN LEYENDA--> 
    </div>
</div>

</div><script type="text/javascript" src="./assets/js/form_validation.js"></script></body>
</html>