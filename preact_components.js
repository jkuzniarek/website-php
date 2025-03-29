import { html, render } from 'https://esm.sh/htm/preact/standalone'
export {html, render, PageContent, Card}

function Card(props){
  return html`<div class="card">
    ${(typeof props.header != 'undefined')? `<div class="card-header">${props.header}</div>`: ''}
    <div class="card-body">${props.children}</div>
    ${(typeof props.footer != 'undefined')? `<div class="card-footer">${props.footer}</div>`: ''}
    </div>`;
}

function PageContent(props){
  return html`<div class="border-bottom border-dark">
  <h1><em>${props.title}</em></h1>
  </div>
<br/>
<div class="row">
  <div class="col-lg-10">
    ${props.children}
  </div>
</div>`;
}