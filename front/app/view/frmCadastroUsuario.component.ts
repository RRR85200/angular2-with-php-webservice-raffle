import { Component, OnInit } from '@angular/core';
import {HttpService} from "../services/http.service";
import {Http} from "@angular/http";

@Component({
    moduleId: module.id,
    selector: 'cadastro-usuario',
    templateUrl: 'frmcadastrousuario.component.html',
    providers: [HttpService]
})
export class CadastroUsuarioComponent implements OnInit {

    private http: Http;

    constructor(private httpService: HttpService) { }

    ngOnInit() { }

    cadastrar(nome:string, email:string, senha:string) {

        this.httpService.postJSON("http://localhost/angular2-with-php-webservice-raffle/back/api/Insert.php","nome=${nome}&email=${email}&senha=${senha}");
    }

    
}