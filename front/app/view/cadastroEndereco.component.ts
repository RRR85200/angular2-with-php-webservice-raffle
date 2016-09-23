/**
 * Created by Márcio Lucas on 23/09/2016.
 */
import { Component, OnInit } from '@angular/core';
import {EnderecoService} from "../services/endereco.service";
import {Endereco} from "../model/Endereco";
import {HttpService} from "../services/http.service";

@Component({
    moduleId: module.id,
    selector: 'endereco',
    templateUrl: '../../template/endereco.component.html'
})
export class CadastroEnderecoComponent implements OnInit {

    private cidadesEstado: Endereco[];
    private estadoSelecionado: Endereco;


    constructor(private httpService: HttpService) { }

    ngOnInit() {
        this.getCidadeEstados();
    }

    getCidadeEstados() {
        this.httpService.getJSON('app/mocks/cidades-estados.json')
            .subscribe(
                data => this.cidadesEstado = data,
                error => console.log(error)
            )
    }

    onSelect(estado: Endereco): void {
        this.estadoSelecionado = estado;
    }

}