import sys
import Pyro4
import cercaIP

comanda=sys.argv[1]
IP=sys.argv[2]
IP_MASTER=cercaIP.cerca()
executaComandes=Pyro4.Proxy("PYRO:jasper.executaComanda@%s:5163"%(IP))
executaComandes.executa("%s '%s' '%s' '%s' '%s' '%s' &"%(comanda,IP_MASTER,IP,0,'a',IP_MASTER))#des de la pagina web nomes sexecutara en wit.ai i en castella, de moment
