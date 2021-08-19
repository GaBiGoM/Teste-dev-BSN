import { HttpClientModule } from '@angular/common/http';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { BrowserModule } from '@angular/platform-browser';
import { RouterModule, Routes } from '@angular/router';

import { AppComponent } from './app.component';
import { DataService } from './service/data.service';
import { CandidatosComponent } from './views/candidatos/candidatos.component';
import { HomeComponent } from './views/home/home.component';
import { LinguagemComponent } from './views/linguagem/linguagem.component';
import { NavbarComponent } from './views/navbar/navbar.component';
import { VagasComponent } from './views/vagas/vagas.component';
import {MatIconModule} from '@angular/material/icon';
import {MatButtonModule} from '@angular/material/button';
import { LinguagemEditComponent } from './views/linguagem-edit/linguagem-edit.component';
import { VagaEditComponent } from './views/vaga-edit/vaga-edit.component';
import { CandidatoEditComponent } from './views/candidato-edit/candidato-edit.component';



const appRoutes: Routes = [
  {path:'',component:HomeComponent},
  {path:'linguagem',component:LinguagemComponent},
  {path:'vaga',component:VagasComponent},
  {path:'candidato',component:CandidatosComponent},
  {path:'edit/:id',component:LinguagemEditComponent},
  {path:'edit-vaga/:id',component:VagaEditComponent},
  {path:'edit-candidato/:id',component:CandidatoEditComponent}



]

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    LinguagemComponent,
    VagasComponent,
    CandidatosComponent,
    NavbarComponent,
    LinguagemEditComponent,
    VagaEditComponent,
    CandidatoEditComponent,
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpClientModule,
    RouterModule.forRoot(appRoutes),
    MatIconModule,
    MatButtonModule
  ],
  providers: [DataService],
  bootstrap: [AppComponent]
})
export class AppModule { }
