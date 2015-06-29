import time
import cercaIP
import Pyro4

cont=0
comandesGlobals=Pyro4.Proxy("PYRO:jasper.comandesGlobals@%s:5164"%(cercaIP.cerca()))

while(1):
	try:
		ocupat=comandesGlobals.valor_ocupat()
		if ocupat==0:		
			cont=0
		else:
			cont=cont+1
		if cont==30:
			cont=0
			comandesGlobals.modifica_ocupat(0)	
	except:
		pass
	time.sleep(1)
	
	
