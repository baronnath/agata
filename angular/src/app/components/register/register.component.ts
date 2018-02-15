import { Component, OnInit, ViewEncapsulation } from '@angular/core';
import { FormGroup, FormControl, Validators } from '@angular/forms';
import { LoginService } from  '../../services/login/login.service';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['../login/login.component.css'],
  encapsulation: ViewEncapsulation.None

})
export class RegisterComponent implements OnInit {

  form:FormGroup;

  headers = new Headers({
    'Content-Type' : 'application/json'
  })

    public constructor(private _loginService:LoginService) {

      this.form = new FormGroup({
        'email': new FormControl('', [
          Validators.required,
          Validators.pattern("^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$")
        ]),
        'password': new FormControl('', [
          Validators.required,
          Validators.minLength(6)
        ])
      });
    }

    ngOnInit() {
    }

    onSubmit() {
      let credentials = {
        'email': this.form.get('email').value),
        'password': this.form.get('password').value)
      }

      this._loginService.newRegistration(credentials)
         .subscribe(data=>{

         })
    }

}