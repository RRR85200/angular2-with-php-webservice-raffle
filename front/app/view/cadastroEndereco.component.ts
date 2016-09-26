/**
 * Created by Márcio Lucas on 23/09/2016.
 */
import {Component, OnInit} from '@angular/core';
import {Endereco} from "../model/Endereco";
import {HttpService} from "../services/http.service";

@Component({
    moduleId: module.id,
    selector: 'endereco',
    templateUrl: '../../template/endereco.component.html'
})
export class CadastroEnderecoComponent implements OnInit {

    private cidadesEstado:Endereco[];
    private estadoSelecionado:Endereco;
    public cidades:any[];


    constructor(private httpService:HttpService) {
    }

    ngOnInit() {
        this.getCidadeEstados();
    }

    getCidadeEstados() {
        this.httpService.getJSON('app/mocks/cidades-estados.json')
            .subscribe(
                data => this.cidadesEstado = data,
                error => console.log(error)
            );
    }


    onSelect():void {
        var x = document.getElementById("estado").selectedIndex;
        var y = document.getElementById("estado").options;
        if (y[x].text != "Selecione") {
            this.estadoSelecionado = this.cidadesEstado[y[x].index - 1];
            this.cidades = this.estadoSelecionado.cidades;
        }
        //TODO: Procurar uma maneira certa de fazer o selectedIndex e o options
        // alert(this.cidades.length);
        // alert(this.cidades);
        // var str = valor;
        // var res = str.split(",");
        // this.cidades = res;
    }

}