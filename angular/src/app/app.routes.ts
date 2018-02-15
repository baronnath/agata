
import { RouterModule, Routes } from '@angular/router';

import { RegularLayoutComponent } from './components/regular-layout/regular-layout.component';
import { CleanLayoutComponent } from './components/clean-layout/clean-layout.component';

import { AppComponent } from './app.component';
import { HomeComponent } from './components/home/home.component';
import { NotfoundComponent } from './components/notfound/notfound.component';
import { LoginComponent } from './components/login/login.component';
import { RegisterComponent } from './components/register/register.component';

const APP_ROUTES: Routes = [
	{ 
		path: '',
		component: RegularLayoutComponent,
		children: [
			{ path: '', component: HomeComponent },
			{ path: 'index', component: HomeComponent },
			{ path: 'home', component: HomeComponent },
		]
	},
	{ 
		path: '',
		component: CleanLayoutComponent,
		children: [
			{ path: 'login', component: LoginComponent },
			{ path: 'register', component: RegisterComponent },
			{ path: '404_notfound', component: NotfoundComponent },
		]
	},
	{ path: '**', pathMatch: 'full', redirectTo: '404_notfound' }

];

export const APP_ROUTING = RouterModule.forRoot(APP_ROUTES);