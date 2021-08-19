import { ThrowStmt } from '@angular/compiler/src/output/output_ast';
import { Component, OnInit } from '@angular/core';
import { DataService } from 'src/app/service/data.service';
import { Linguagem } from '../class/linguagem';

@Component({
  selector: 'app-linguagem',
  templateUrl: './linguagem.component.html',
  styleUrls: ['./linguagem.component.css']
})
export class LinguagemComponent implements OnInit {
  linguagems:any;
  linguagem = new Linguagem;
  constructor(
    public dataService:DataService,
  ) { }

  ngOnInit():void {
    this.ListarLinguagem();
  }
  ListarLinguagem(){
    this.dataService.ListarLinguagem().subscribe(res =>{
      this.linguagems=res;
    });
  }

  insertLinguagem(){
    this.dataService.insertLinguagem(this.linguagem).subscribe(res =>{
      this.ListarLinguagem();
    })
  }

  deleteLinguagem(id:any){
    this.dataService.deleteLinguagem(id).subscribe(res =>{
      this.ListarLinguagem();
    })
  }
}
