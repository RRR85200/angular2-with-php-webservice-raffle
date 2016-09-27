import {Component, OnInit} from '@angular/core';
import {HttpService} from "../services/http.service";
import {Http} from "@angular/http";
import {Usuario} from "../model/Usuario";
import {Retorno} from "../model/Retorno";
import {Endereco} from "../model/Endereco";

@Component({
    moduleId: module.id,
    selector: 'cadastro-usuario',
    templateUrl: '../../template/frm-cadastro-usuario.html',
    providers: [HttpService]
})
export class CadastroUsuarioComponent implements OnInit {

    private retorno: Retorno;
    private usuario: Usuario;
    private msg: string = "";
    private isCallback = false;
    private nome: string;
    private email: string;
    private senha: string;
    private idCadastrado: string;
    public endereco: Endereco;

    private http: Http;


    constructor(private httpService: HttpService) {
    }

    ngOnInit() {

    }

    retornaValores() {
        this.msg = this.retorno.msg;
        this.isCallback = true;
        this.idCadastrado = this.retorno.id_cadastrado;
    }


    cadastrarUsuario() {

        this.cadastrarEndereco();

        let body: string;
        body = "q=usuario&nome=" + this.nome + "&email=" + this.email + "&senha=" + this.senha + "&idEndereco=" + this.idCadastrado;

        this.httpService.postJSON("http://192.168.0.104/angular2-with-php-webservice-raffle/back/api/Insert.php",
            body)
            .subscribe(
                data => this.retorno = data,
                error => console.log(error),
                () => this.retornaValores()
            )
    }

    cadastrarEndereco() {
        let body: string;
        body = "q=endereco&cidade=" + this.endereco.cidade + "&estado=" + this.endereco.estado + "&cep=" + this.endereco.cep + "&endereco=" + this.endereco.enderecoPorExtenso;

        this.httpService.postJSON("http://192.168.0.104/angular2-with-php-webservice-raffle/back/api/Insert.php",
            body)
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