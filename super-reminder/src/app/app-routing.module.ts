import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { NotFoundComponent } from './components/not-found/not-found.component';
import { HomeComponent } from './pages/home/home.component';
import { LoginComponent } from './pages/login/login.component';

const routes: Routes = [
  {
    path: '',
    component: HomeComponent
  },
  {
    path: 'not-found',
    component: NotFoundComponent
  },
  {
    path: 'login',
    component: LoginComponent
  },
  {
    path: '**',
    redirectTo: '/not-found'
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
