import { Component } from '@angular/core';

@Component({
    selector: 'app',
    templateUrl: '../template/welcome.html'
})
export class AppComponent {
  private email:String;
  private senha:String;

  verificaLogin(){
    //TODO: implementar
    //  +Logica: Mandar o link com as credenciais, se sim. retorna true com todas as informações do usuario
  }

}
