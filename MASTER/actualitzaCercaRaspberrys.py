import Pyro4
import cercaIP
import signal

IP=cercaIP.cerca()

def signal_handler(signum, frame):

    raise Exception("Timed out!")

def cerca():
	
	direccions=range(0,255)
	llista=[]
	for direccio in direccions:
		comprovaConnexio=Pyro4.Proxy("PYRO:jasper.comprovaConnexio@192.168.1.%s:5166"%(str(direccio)))
		signal.signal(signal.SIGALRM, signal_handler)
		signal.setitimer(signal.ITIMER_REAL,0.1) 
		try:
			index=comprovaConnexio.comprova()
			llista.append("192.168.1.%s"%(direccio))
			comprovaConnexio.modifica_valor(IP)
		except Exception, msg:
			pass
		signal.setitimer(signal.ITIMER_REAL,0)
	return llista

def actualitza():

	cercaRaspberrys=Pyro4.Proxy("PYRO:jasper.cercaRaspberrys@%s:5168"%(cercaIP.cerca()))
	cercaRaspberrys.modifica(cerca())

if __name__=="__main__":

	actualitza()
