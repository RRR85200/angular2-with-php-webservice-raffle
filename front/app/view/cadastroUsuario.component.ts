import {Component, OnInit} from '@angular/core';
import {HttpService} from "../services/http.service";
import {Http} from "@angular/http";
import {Usuario} from "../model/Usuario";
import {Callback} from "../model/Callback";

@Component({
    moduleId: module.id,
    selector: 'cadastro-usuario',
    templateUrl: '../../template/frm-cadastro-usuario.html',
    providers: [HttpService]
})
export class CadastroUsuarioComponent implements OnInit {

    private callback: Callback;
    private usuario: Usuario;

    private nome:string;
    private email:string;
    private senha:string;

    private http:Http;


    constructor(private httpService:HttpService) {
    }

    ngOnInit() {
    }

    retornaValores() {
        alert(this.callback.msg);
    }

    cadastrar() {

        this.httpService.getJSON("http://localhost/angular2-with-php-webservice-raffle/back/api/Insert.php" +
            "?q=usuario&nome="+this.nome+"&email="+this.email+"&senha="+this.senha)
            .subscribe(
                data => this.callback = data,
                error => console.log(error),
                () => alert(this.callback.msg)
            )
    }



}