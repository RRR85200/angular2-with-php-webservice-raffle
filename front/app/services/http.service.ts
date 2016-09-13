/**
 * Criado por Márcio Lucas on 12/08/2016.
 * - marciioluucas@gmail.com
 */
import {Injectable} from '@angular/core';
import {Http, Response, Headers} from '@angular/http';
import 'rxjs/add/operator/map';


@Injectable()
export class HttpService {

  constructor(private http: Http) {
  }

  getJSON(url:string) {
    try {
      return this.http.get(url)
        .map((res: Response) => res.json())


    } catch (Erro){
      alert('Erro na requisição HTTP ' + Erro.message)
    }
  }

  postJSON(url:string, body:string) {
    var headers = new Headers();
    headers.append('Content-Type', 'application/x-www-form-urlencoded');

    this.http
        .post(url, body, { headers: headers })
        .map(response => response.json())
  }

}

// EXEMPLO POST

// authenticate(username, password) {
//   var body = `username=${username}&password=${password}`;
//   var headers = new Headers();
//   headers.append('Content-Type', 'application/x-www-form-urlencoded');
//
//   this.http
//       .post('http://localhost:3001/sessions/create', body, { headers: headers })
//       .map(response => response.json())
//       .subscribe(
//           response => this.storeToken(response.id_token),
//           this.logError,
//           () => console.log('Authentication Complete')
//       );
// }