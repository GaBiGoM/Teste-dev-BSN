import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { RouterModule, Routes } from '@angular/router';


import { AppComponent } from './app.component';

import { HomeComponent } from './views/home/home.component';
import { LinguagemComponent } from './views/linguagem/linguagem.component';
import { NavbarComponent } from './views/navbar/navbar.component';
import { VagasComponent } from './views/vagas/vagas.component';
import { CandidatosComponent } from './views/candidatos/candidatos.component';
import { DataService } from './service/data.service';
import {HttpClientModule} from '@angular/common/http';




const appRoutes: Routes = [
  {path:'',component:HomeComponent},
  {path:'linguagem',component:LinguagemComponent},
  {path:'vaga',component:VagasComponent},
  {path:'candidato',component:CandidatosComponent}
]

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    LinguagemComponent,
    VagasComponent,
    CandidatosComponent,
    NavbarComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpClientModule,
    RouterModule.forRoot(appRoutes),
  ],
  providers: [DataService],
  bootstrap: [AppComponent],

})
export class AppModule { }
