import { Component } from '@angular/core';
import {HttpService} from "../services/http.service";
import {Usuario} from "../model/Usuario";

@Component({
  selector: 'login',
  templateUrl: '../template/login.html'
})
export class LoginComponent {

  email:string;
  senha:string;
  usuario: Usuario;


  constructor(private httpService: HttpService) {

  }

  verificaLogin(){
    // this.httpService.getJSON('http://localhost:3000/menu.json')
    //   .subscribe(
    //     data => this.usuario = data,
    //     error => console.log(error),
    //     () => console.log("Acabou")
    //   );

  }

}
