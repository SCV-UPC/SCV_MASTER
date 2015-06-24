import Pyro4
import os
import cercaIP

class executaComanda():
	"""
	Aquesta classe permet executar una comanda a cadascuna de les diferents Raspberry's, de 
	froma local, gracies a l'us d'objectes remots.
	"""
	def executa(self,comanda):

		os.system(comanda)

executaComanda=executaComanda()
Pyro4.Daemon.serveSimple({executaComanda:"jasper.executaComanda"},port=5163,host=cercaIP.cerca(),ns=False)



