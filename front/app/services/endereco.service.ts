/**
 * Created by Carlos Eduardo on 23/09/2016.
 */
import { Injectable } from '@angular/core';
import {Endereco} from "../model/Endereco";
import {CIDADESESTADOS} from "../mocks/mock-cidades-estados";

@Injectable()
export class EnderecoService {

    constructor() { }

    getCidadeEstados(): Promise<Endereco[]> {
        return Promise.resolve(CIDADESESTADOS);
    }

}