import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { DataService } from 'src/app/service/data.service';
import { Candidato } from '../class/candidato';

@Component({
  selector: 'app-candidato-edit',
  templateUrl: './candidato-edit.component.html',
  styleUrls: ['./candidato-edit.component.css']
})
export class CandidatoEditComponent implements OnInit {
  vagas:any;
  linguagems:any;
  id:any;
  cadidatos:any;
  candidato = new Candidato;

  constructor(
    private route:ActivatedRoute,
    private dataService: DataService,
    private router: Router) { }

  ngOnInit(): void {
    this.id=this.route.snapshot.params.id;
    this.ListarVagas();
    this.ListarLinguagem();
    this.getCandidatoId();
  }
  ListarVagas(){
    this.dataService.ListarVagas().subscribe(res =>{
      this.vagas=res;
      console.log(this.vagas);
    });
  }
  ListarLinguagem() {
    this.dataService.ListarLinguagem().subscribe(res => {
      this.linguagems = res;
    });
  }
  getCandidatoId(){
    this.dataService.getCandidatoId(this.id).subscribe(res =>{
      this.cadidatos=res;
      this.candidato = this.cadidatos;
      console.log(this.candidato);
    })
  }
  updateCandidato(){
    this.dataService.updateCandidato(this.id, this.candidato).subscribe(res =>{
      this.router.navigate(['candidato'])
    })
  }

}
