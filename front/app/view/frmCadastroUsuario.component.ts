import { Component, OnInit } from '@angular/core';
import {HttpService} from "../services/http.service";
import {Headers, Http, Response} from "@angular/http";

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

    cadastrar(username:string, password:string) {

        this.httpService.getJSON("http://localhost/angular2-with-php-webservice-raffle/back/api/Search.php?q=usuario&filtro=1&valorFiltro=1");
    }

    
}