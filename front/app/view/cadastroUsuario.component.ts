import {Component, OnInit} from '@angular/core';
import {HttpService} from "../services/http.service";
import {Http} from "@angular/http";
import {Usuario} from "../model/Usuario";
import {Retorno} from "../model/Retorno";

@Component({
    moduleId: module.id,
    selector: 'cadastro-usuario',
    templateUrl: '../../template/frm-cadastro-usuario.html',
    providers: [HttpService]
})
export class CadastroUsuarioComponent implements OnInit {

    private retorno: Retorno;
    private usuario: Usuario;
    private data: Object;
    private msg: string = "";
    private nome:string;
    private email:string;
    private senha:string;

    private http:Http;


    constructor(private httpService:HttpService) {
    }

    ngOnInit() {

    }

    retornaValores() {
        this.msg = this.retorno.msg;


    }

    cadastrar() {

        this.httpService.getJSON("http://localhost/angular2-with-php-webservice-raffle/back/api/Insert.php" +
            "?q=usuario&nome="+this.nome+"&email="+this.email+"&senha="+this.senha)
            .subscribe(
                data => this.retorno = data,
                error => console.log(error),
                () => this.retornaValores()
            )
    }


    // teste() {
    //     this.httpService.getJSON("http://localhost/angular2-with-php-webservice-raffle/back/api/Search.php?q=usuario&filtro=1&valorFiltro=1")
    //         .subscribe(
    //             data => this.retorno = data,
    //             error => console.log(error),
    //             () => console.log(this.retorno)
    //         )
    // }
}