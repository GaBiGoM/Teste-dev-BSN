import { Component, OnInit } from '@angular/core';
import { DataService } from 'src/app/service/data.service';
import { Vaga } from '../class/vaga';

@Component({
  selector: 'app-vagas',
  templateUrl: './vagas.component.html',
  styleUrls: ['./vagas.component.css']
})
export class VagasComponent implements OnInit {
  vagas:any;
  vaga = new Vaga;
  linguagems: any;

  constructor(public dataService:DataService) { }

  ngOnInit() {
    this.ListarVagas();
    this.ListarLinguagem();
  }
  ListarVagas(){
    this.dataService.ListarVagas().subscribe(res =>{
      this.vagas=res;
      console.log(this.vagas);
    });
  }

  insertVagas(){
    this.dataService.insertVagas(this.vaga).subscribe(res =>{
      this.ListarVagas();
    })
  }
  ListarLinguagem() {
    this.dataService.ListarLinguagem().subscribe(res => {
      this.linguagems = res;
    });
  }

  deleteVagas(id:any)
  {
    this.dataService.deleteVagas(id).subscribe(res =>{
      this.ListarVagas();
    })
  }


}
