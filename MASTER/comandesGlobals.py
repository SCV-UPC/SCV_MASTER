import time
import Pyro4
import signal
import cercaIP
from actualitzaComandesGlobals import cerca

class comandesGlobals():

	def __init__(self):
		self.comandes=cerca()
		self.ocupat=0

	def valor_actual(self):
		return self.comandes

	def modifica_valor(self,variable):
		self.comandes=variable

	def valor_ocupat(self):
		return self.ocupat

	def modifica_ocupat(self,valor):
		self.ocupat=valor

comandesGlobals=comandesGlobals()
Pyro4.Daemon.serveSimple({comandesGlobals:"jasper.comandesGlobals"},port=5164,host=cercaIP.cerca(),ns=False)
