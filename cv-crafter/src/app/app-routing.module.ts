import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ConnexionComponent } from './connexion/connexion.component';


const routes: Routes = [
  { path: '', component: ConnexionComponent },  // Page de connexion comme page d'accueil
  // ... autres routes de votre application
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
