import { Component, OnInit } from '@angular/core';
import {HttpService} from "../services/http.service";

@Component({
    moduleId: module.id,
    selector: 'cadastro-usuario',
    templateUrl: 'frmcadastrousuario.component.html',
    providers: [HttpService]
})
export class CadastroUsuarioComponent implements OnInit {
    constructor(private http: HttpService) { }

    ngOnInit() { }

    cadastrar() { }
    
}