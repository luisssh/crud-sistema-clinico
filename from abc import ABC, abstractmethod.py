from abc import ABC, abstractmethod

class DispositivoEletronico(ABC):
    @abstractmethod
    def ligar(self):
        pass

    @abstractmethod
    def desligar(self):
        pass

    @abstractmethod
    def exibir_status(self):
        pass


class Televisao(DispositivoEletronico):
    def __init__(self):
        self.ligada = False
        self.volume = 10

    def ligar(self):
        self.ligada = True
        print("Televisão ligada.")

    def desligar(self):
        self.ligada = False
        print("Televisão desligada.")

    def exibir_status(self):
        print(f"Status da TV: {'Ligada' if self.ligada else 'Desligada'}, Volume: {self.volume}")

    def aumentar_volume(self):
        if self.ligada:
            self.volume += 1
            print(f"Volume aumentado para {self.volume}")
        else:
            print("Ligue a televisão para ajustar o volume.")

    def diminuir_volume(self):
        if self.ligada and self.volume > 0:
            self.volume -= 1
            print(f"Volume diminuído para {self.volume}")
        elif not self.ligada:
            print("Ligue a televisão para ajustar o volume.")
        else:
            print("Volume já está no mínimo.")


class Smartphone(DispositivoEletronico):
    def __init__(self):
        self.ligado = False
        self.aplicativo_aberto = None

    def ligar(self):
        self.ligado = True
        print("Smartphone ligado.")

    def desligar(self):
        self.ligado = False
        print("Smartphone desligado.")

    def exibir_status(self):
        status = "Ligado" if self.ligado else "Desligado"
        app_info = f", Aplicativo aberto: {self.aplicativo_aberto}" if self.aplicativo_aberto else ""
        print(f"Status do Smartphone: {status}{app_info}")

    def abrir_aplicativo(self, nome_app):
        if self.ligado:
            if self.aplicativo_aberto:
                print(f"Fechando o aplicativo {self.aplicativo_aberto}")
            self.aplicativo_aberto = nome_app
            print(f"Abrindo o aplicativo {nome_app}")
        else:
            print("Ligue o smartphone para abrir um aplicativo.")

    def fechar_aplicativo(self):
        if self.ligado:
            if self.aplicativo_aberto:
                print(f"Fechando o aplicativo {self.aplicativo_aberto}")
                self.aplicativo_aberto = None
            else:
                print("Nenhum aplicativo está aberto.")
        else:
            print("Ligue o smartphone para fechar um aplicativo.")


tv = Televisao()
smartphone = Smartphone()

tv.ligar()
tv.aumentar_volume()
tv.exibir_status()
tv.desligar()

print("-" * 20)

smartphone.ligar()
smartphone.abrir_aplicativo("Whatsapp")
smartphone.exibir_status()
smartphone.fechar_aplicativo()
smartphone.desligar()
