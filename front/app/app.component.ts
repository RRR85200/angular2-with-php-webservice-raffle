import { Component } from '@angular/core';
import {HttpService} from "./services/http.service";
import {Usuario} from "./model/Usuario";

@Component({
    selector: 'app',
    templateUrl: '../template/login.html'
})
export class AppComponent {
  private email:String;
  private senha:String;
  private usuario: Usuario;

  constructor() {
  }



}
