import {Component} from "@angular/core";
import {HttpService} from "../services/http.service";
import {Usuario} from "../model/Usuario";

@Component({
    selector: 'login',
    templateUrl: '../template/login.html'
})
export class LoginComponent {

    email:string;
    senha:string;
    nome:string;
    usuario:Usuario;


    constructor(private httpService:HttpService) {

    }
    retornaValores() {
        alert("Nome: " +this.usuario.nome);
    }
    verificaLogin() {
        this.httpService.getJSON('http://localhost/back/controller/UsuarioController.php?entrar=1&email=' + this.email + '&senha=' + this.senha)
            .subscribe(
                data => this.usuario = data,
                error => console.log(error),
                () => this.retornaValores()
            )}



}
