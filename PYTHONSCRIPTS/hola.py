#executaComandes.executa("%s '%s' '%s' '%s' '%s' &"%(linia,IP_MASTER,IP,num_mic,text))
import Pyro4
import sys
import adaptar
import escolta
import parla

IP_MASTER=sys.argv[1]
IP=sys.argv[2]
num_mic=sys.argv[3]
text=sys.argv[4]
IP_DIR=sys.argv[5]

parla.parla(IP_DIR,num_mic,'Bienvenido a casa, Eduard.')
