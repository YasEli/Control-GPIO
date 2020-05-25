<?php
	if ($_REQUEST['encender17'])
				    {
				     exec("sudo /./home/pi/gpio17on.sh");
                                     exec("sudo /./etc/ssmtp/mail.sh");
				    }

	if ($_REQUEST['apagar17'])
 				  {
				   exec("sudo /./home/pi/gpio17off.sh");
                                   exec("sudo /./etc/ssmtp/mailoff.sh");
				  }

        if ($_REQUEST['encender22'])
                                    {
                                     exec("sudo /./home/pi/gpio22on.sh");
                                     exec("sudo /./etc/ssmtp/mail.sh");
                                    }

        if ($_REQUEST['apagar22'])
                                  {
                                   exec("sudo /./home/pi/gpio22off.sh");
                                   exec("sudo /./etc/ssmtp/mailoff.sh");
                                  }


        if ($_REQUEST['encender27'])
                                    {
                                     exec("sudo /./home/pi/gpio27on.sh");
                                     exec("sudo /./etc/ssmtp/mail.sh");
                                    }

        if ($_REQUEST['apagar27'])
                                  {
                                   exec("sudo /./home/pi/gpio27off.sh");
                                   exec("sudo /./etc/ssmtp/mailoff.sh");
                                  }

        if ($_REQUEST['activarFoto'])
                                     {
                                      exec("sudo /./home/pi/foto.sh");
                                     }

        if ($_REQUEST['activarMail'])
                                     {
                                      exec("sudo /./etc/ssmtp/correo.sh");
                                     }

        if ($_REQUEST['prog1'])
                               {
                                exec("sudo /./home/pi/permiso.sh");
                                $minini=$_REQUEST['minini'];
                                $horaini=$_REQUEST['horaini'];
                                $minf=$_REQUEST['minf'];
                                $horaf=$_REQUEST['horaf'];
                                $dia="*";
                                $mes="*";
                                $ano="*";
                                $user="root";
                                $tab=" ";
                                $mail="Apagado";
                                $mail1="2>&1 ;";
                                $mail2="mail -e -s";
                                $mail3="Encendido"; 
                                $mail4="proyectosoii2020@gmail.com";
                                $path1="/home/pi/gpio17on.sh";
                                $pf1=fopen("/etc/cron.d/17on", "w");
                                fwrite($pf1,$minini);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$horaini);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$dia);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$mes);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$ano);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$user);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$path1);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$mail1);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$mail2);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$mail3);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$mail4);
                                fwrite($pf1,"\n");
                                fclose($pf1);
                                
                                $path2="/home/pi/gpio17off.sh";
                                $pf2=fopen("/etc/cron.d/17off", "w");
                                fwrite($pf2,$minf);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$horaf);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$dia);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$mes);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$ano);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$user);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$path2);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$mail1);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$mail2);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$mail);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$mail4);

                                fwrite($pf2,"\n");
                                fclose($pf2);

                                exec("sudo /./home/pi/nopermiso.sh");
                               }
        if ($_REQUEST['prog2'])
                               {
                                exec("sudo /./home/pi/permiso.sh");
                                $minini2=$_REQUEST['minini2'];
                                $horaini2=$_REQUEST['horaini2'];
                                $minf2=$_REQUEST['minf2'];
                                $horaf2=$_REQUEST['horaf2'];
                                $dia="*";
                                $mes="*";
                                $ano="*";
                                $user="root";
                                $tab=" ";
                                $mail="Apagado";
                                $mail1="2>&1 ;";
                                $mail2="mail -e -s";
                                $mail3="Encendido"; 
                                $mail4="proyectosoii2020@gmail.com";
                                $path1="/home/pi/gpio22on.sh";
                                $pf1=fopen("/etc/cron.d/22on", "w");
                                fwrite($pf1,$minini2);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$horaini2);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$dia);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$mes);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$ano);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$user);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$path1);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$mail1);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$mail2);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$mail3);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$mail4);
                                fwrite($pf1,"\n");
                                fclose($pf1);

                                $path2="/home/pi/gpio22off.sh";
                                $pf2=fopen("/etc/cron.d/22off", "w");
                                fwrite($pf2,$minf2);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$horaf2);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$dia);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$mes);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$ano);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$user);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$path2);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$mail1);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$mail2);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$mail);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$mail4);
                                fwrite($pf2,"\n");
                                fclose($pf2);

                                exec("sudo /./home/pi/nopermiso.sh");
                               }

        if ($_REQUEST['prog3'])
                               {
                                exec("sudo /./home/pi/permiso.sh");
                                $minini3=$_REQUEST['minini3'];
                                $horaini3=$_REQUEST['horaini3'];
                                $minf3=$_REQUEST['minf3'];
                                $horaf3=$_REQUEST['horaf3'];
                                $dia="*";
                                $mes="*";
                                $ano="*";
                                $user="root";
                                $tab=" ";
                                $mail="Apagado";
                                $mail1="2>&1 ;";
                                $mail2="mail -e -s";
                                $mail3="Encendido"; 
                                $mail4="proyectosoii2020@gmail.com";
                                $path1="/home/pi/gpio27on.sh";
                                $pf1=fopen("/etc/cron.d/27on", "w");
                                fwrite($pf1,$minini3);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$horaini3);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$dia);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$mes);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$ano);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$user);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$path1);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$mail1);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$mail2);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$mail3);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$mail4);
                                fwrite($pf1,"\n");
                                fclose($pf1);

                                $path2="/home/pi/gpio27off.sh";
                                $pf2=fopen("/etc/cron.d/27off", "w");
                                fwrite($pf2,$minf3);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$horaf3);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$dia);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$mes);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$ano);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$user);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$path2);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$mail1);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$mail2);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$mail);
                                fwrite($pf2,$tab);
                                fwrite($pf2,$mail4);
                                fwrite($pf2,"\n");
                                fclose($pf2);

                                exec("sudo /./home/pi/nopermiso.sh");
                               }

        if ($_REQUEST['prog4'])
                               {
                                exec("sudo /./home/pi/permiso.sh");
                                $minini4=$_REQUEST['minini4'];
                                $horaini4=$_REQUEST['horaini4'];
                                $dia="*";
                                $mes="*";
                                $ano="*";
                                $user="root";
                                $tab=" ";
                                $path1="/home/pi/foto.sh";
                                $pf1=fopen("/etc/cron.d/tomarFoto", "w");
                                fwrite($pf1,$minini4);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$horaini4);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$dia);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$mes);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$ano);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$user);
                                fwrite($pf1,$tab);
                                fwrite($pf1,$path1);
                                fwrite($pf1,"\n");
                                fclose($pf1);
                                exec("sudo /./home/pi/nopermiso.sh");
                               }
         
	header("location:index.php");
?>
