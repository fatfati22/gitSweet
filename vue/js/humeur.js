
document.addEventListener('DOMContentLoaded',()=>{
const moodEmoji=document.getElementById('moodEmoji');
const moodTitle=document.getElementById('moodTitle');
if(!moodEmoji||!moodTitle)return;
const h=[
{emoji:'😊',titre:'Joyeux'},
{emoji:'😌',titre:'Calme'},
{emoji:'😢',titre:'Triste'},
{emoji:'😠',titre:'En colère'},
{emoji:'😰',titre:'Stressé'},
{emoji:'😴',titre:'Fatigué'}
];
let i=0;
moodEmoji.addEventListener('click',()=>{
i=(i+1)%h.length;
moodEmoji.textContent=h[i].emoji;
moodTitle.textContent=h[i].titre;
});
});
