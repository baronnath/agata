import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';


//Routes
import { APP_ROUTING } from './app.routes';


//Services
import { LoginService } from './services/login/login.service';


//Components
import { AppComponent } from './app.component';

import { LoginComponent } from './components/login/login.component';
import { NotfoundComponent } from './components/notfound/notfound.component';

import { HeaderComponent } from './components/header/header.component';
import { HomeComponent } from './components/home/home.component';
import { FooterComponent } from './components/footer/footer.component';
import { RegisterComponent } from './components/register/register.component';
import { RegularLayoutComponent } from './components/regular-layout/regular-layout.component';
import { CleanLayoutComponent } from './components/clean-layout/clean-layout.component';



@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    NotfoundComponent,
    HeaderComponent,
    FooterComponent,
    HomeComponent,
    RegisterComponent,
    RegularLayoutComponent,
    CleanLayoutComponent
  ],
  imports: [
    BrowserModule,
    APP_ROUTING,
    ReactiveFormsModule,
    HttpModule
  ],
  providers: [
    LoginService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
