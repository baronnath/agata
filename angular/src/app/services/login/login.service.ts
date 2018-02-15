import { Injectable } from '@angular/core';
import { Http, Headers } from '@angular/http';
import 'rxjs/Rx';

@Injectable()
export class LoginService {

  url:string = "http://localhost/agata/symfony/web/new-registration"

  constructor( private http:Http ) { }

  newRegistration( json ){

  	let headers = new Headers({
  		'Content-Type':'application/json'
  	});

  	return this.http.post(this.url, json, {headers})
  		.map( res =>{
  			console.log(res.json());
  			return res.json();
  		})

  }

}
