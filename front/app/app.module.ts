import {NgModule}      from '@angular/core';
import {BrowserModule} from '@angular/platform-browser';

import {AppComponent}  from './app.component';
import {HttpModule} from "@angular/http";
import {FormsModule} from "@angular/forms";
import {HttpService} from "./services/http.service";
import {LoginComponent} from "./view/login.component";
import {CadastroUsuarioComponent} from "./view/cadastroUsuario.component";
import {EnderecoService} from "./services/endereco.service";

@NgModule({
    imports: [
        BrowserModule,
        FormsModule,
        HttpModule
    ],
    declarations: [
        AppComponent,
        LoginComponent,
        CadastroUsuarioComponent
    ],
    providers: [
        HttpService,
        EnderecoService
    ],
    bootstrap: [
        AppComponent
    ]
})
export class AppModule {
}
