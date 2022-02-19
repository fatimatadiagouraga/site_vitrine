import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { LoginComponent } from './login/login.component';
import { CommandeComponent } from './commande/commande.component';
import { MenuComponent } from './menu/menu.component';
import { PlatComponent } from './plat/plat.component';
import { ModifierPlatComponent } from './modifier-plat/modifier-plat.component';
import { AjoutPlatComponent } from './ajout-plat/ajout-plat.component';
import { AjoutMenuComponent } from './ajout-menu/ajout-menu.component';


const routes: Routes = [
  {path:"login", component:LoginComponent},
  {path: "", redirectTo: "login", pathMatch: "full" },
  {path:"commande", component:CommandeComponent},
  {path:"menu", component:MenuComponent},
  {path:"plat", component:PlatComponent},
  {path:"modifPlat", component:ModifierPlatComponent},
  {path:"ajoutPlat", component:AjoutPlatComponent},
  {path:"ajoutMenu", component:AjoutMenuComponent},




  

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
