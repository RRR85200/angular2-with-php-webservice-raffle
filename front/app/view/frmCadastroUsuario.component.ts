import { Component, OnInit } from '@angular/core';
import {HttpService} from "../services/http.service";
import {Headers, Http} from "@angular/http";

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

    cadastrar(username, password) {

    }

    
}