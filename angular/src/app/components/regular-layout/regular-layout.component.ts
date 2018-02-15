import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-regular-layout',
  template: `
    <app-header></app-header>

    <div class="container-fluid">
      <router-outlet></router-outlet>
    </div>


    <app-footer></app-footer>
  `,
  styles: []
})
export class RegularLayoutComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

}
