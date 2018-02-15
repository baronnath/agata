import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-clean-layout',
  template: `
        <router-outlet></router-outlet>
  `,
  styles: []
})
export class CleanLayoutComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

}
