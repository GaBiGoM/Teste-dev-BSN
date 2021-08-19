import { Component, OnInit } from '@angular/core';
import { DataService } from 'src/app/service/data.service';
import { Candidato } from '../class/candidato';

@Component({
  selector: 'app-candidatos',
  templateUrl: './candidatos.component.html',
  styleUrls: ['./candidatos.component.css']
})
export class CandidatosComponent implements OnInit {
  candidatos:any;
  vagas:any;
  linguagems:any;
  candidato = new Candidato();
  constructor(public dataService:DataService,) { }

  ngOnInit() {
    this.ListarCandidato();
    this.ListarLinguagem();
    this.ListarVagas();
  }
  ListarVagas(){
    this.dataService.ListarVagas().subscribe(res =>{
      this.vagas=res;
      console.log(this.vagas);
    });
  }
  ListarLinguagem(){
    this.dataService.ListarLinguagem().subscribe(res =>{
      this.linguagems=res;
    });
  }

  ListarCandidato(){
    this.dataService.ListarCandidato().subscribe(res=>{
      this.candidatos = res;
    });
  }

  insertCandidato(){
    this.dataService.insertCandidato(this.candidato).subscribe(res =>{
      this.ListarCandidato();
    });
  }
  deleteCandidato(id:any)
  {
    this.dataService.deleteCandidato(id).subscribe(res =>{
      this.ListarCandidato();
    })
  }
}
