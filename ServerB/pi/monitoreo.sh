#!/bin/bash
tput clear
while true
	  do
	    v1=$(cat /home/pi/gpio/gpio17/value)
            v2=$(cat /home/pi/gpio/gpio22/value)
            v3=$(cat /home/pi/gpio/gpio27/value)
	    tput cup 5 15; echo "---SIMULACION GPIOs---"
	    tput cup 10 10; echo "--GPIO--"
	    tput cup 10 40; echo "--Voltaje--"
	    if [ "$v1" = '1' ]
			    then
			        tput cup 12 11; echo "17"
			        tput cup 12 43; echo $v1
	    else
		if [ "$v1" = '0' ]
			        then
		 	            tput cup 12 11; echo "17"
			            tput cup 12 43; echo $v1
			        fi
	    fi
            if [ "$v2" = '1' ]
                            then
                                tput cup 13 11; echo "22"
                                tput cup 13 43; echo $v2
            else
                if [ "$v2" = '0' ]
                                then
                                    tput cup 13 11; echo "22"
                                    tput cup 13 43; echo $v2
                                fi
            fi
            if [ "$v3" = '1' ]
                            then
                                tput cup 14 11; echo "27"
                                tput cup 14 43; echo $v3
            else
                if [ "$v3" = '0' ]
                                then
                                    tput cup 14 11; echo "27"
                                    tput cup 14 43; echo $v3
                                fi
            fi
	    sleep 0.5
	  done
