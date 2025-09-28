@extends('layout.public.main')
@section('content')
@php
$s = asset('image/wave.png');
$w = asset('image/wave3 1.png');
$n = asset('image/wave3.png');
$q = asset('image/hero1.png');
@endphp

<section class="relative w-full h-[100vh] bg-[#113975] overflow-hidden flex  items-center justify-center">

  <!-- Content (on top of waves) -->
  <div class="relative z-[1100] text-center text-white flex justify-between items-center gap-4 w-[80vw]">
    <div class='h-[60vh] mt-60'>
      <h1 class="anim text-3xl font-bold mb-4" id='htext'>Hello, I am Student</h1>
      
      <p class="anim text-lg opacity-80 max-w-md" id='ptext'>
        Welcome to my profile. I’m learning with passion and enjoying the journey 🚀
      </p>
    </div>
    <div class="w-[550px] h-[418px] mb-36 right-0 bg-[url('{{$q}}')] flex justify-center items-center animate-bg-float anim" id="ianim" >
      <img src="{{ asset('image/hero2.png') }}" alt="HeroImg" class="w-[300px] h-[300px] animate-img-float">
    </div>
  </div>

  <!-- Foreground wave -->
  <div class="wave z-[1000] absolute left-0 bottom-0 w-full h-[100px] opacity-100"
    style="background-image: url('{{ $w }}'); background-size: 2000px 100px; background-repeat: repeat-x;">
  </div>

  <!-- Mid wave -->
  <div class="wave2 z-[999] absolute left-0 bottom-0 w-full h-[160px] opacity-60"
    style="background-image: url('{{ $n }}'); background-size: 2000px 160px; background-repeat: repeat-x;">
  </div>

  <!-- Deep background wave -->
  <div class="wave3 z-[998] absolute left-0 bottom-0 w-full h-[200px] opacity-40"
    style="background-image: url('{{ $s }}'); background-size: 2000px 200px; background-repeat: repeat-x;">
  </div>

</section>


Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam quasi natus, reprehenderit sunt eveniet minus temporibus, molestiae, officiis voluptates suscipit voluptatem quidem. Dolor maiores ullam eum culpa accusantium, esse fuga.
Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non dicta, vero ducimus similique odit, est hic aut consequuntur vitae quo magnam quam voluptas necessitatibus? Saepe voluptas quis eveniet accusantium sapiente!
Voluptas laudantium vero magnam eum repudiandae facere illo, perspiciatis repellendus illum laboriosam dolore odio tempore commodi amet debitis, sequi libero officia! Nihil nulla nemo delectus suscipit maiores hic magni autem?
Distinctio, rem provident similique eligendi ex at necessitatibus possimus sequi, sint vitae, veritatis cumque dignissimos magnam suscipit! Veritatis asperiores vel distinctio tempora? Dolor ducimus quos eum ex iste suscipit eos?
Eaque modi ipsa explicabo quod inventore quia voluptatem, aperiam doloremque rem, alias, earum fugiat! Repudiandae ratione temporibus fugiat dolore quia earum. Animi corrupti dignissimos molestiae exercitationem, dolor quam est debitis.
Atque dolore maxime at omnis culpa eos corrupti pariatur iusto quibusdam minima earum natus repellat, optio praesentium magni nemo rem quos quisquam veniam recusandae nesciunt non accusantium? Reiciendis, natus maiores.
Quam ipsam, debitis facere harum hic adipisci ducimus dolores minus ad sit sapiente illo, accusamus magni at eos eaque exercitationem amet tempore, laborum ex. Quam iure laborum incidunt temporibus inventore.
Officiis odit expedita iusto suscipit, incidunt nostrum et harum voluptatum, illo sequi, sed vel exercitationem reprehenderit doloremque quo asperiores autem quia consequatur explicabo nihil facilis accusamus natus in sint. Quasi!
Quis a laborum reiciendis saepe perferendis culpa atque tenetur consequuntur error ullam nostrum quo optio et inventore dolores, esse praesentium iste harum eum. Sed cum soluta dolorem sequi nemo numquam!
Ipsam amet fugiat mollitia quam quasi laboriosam illum maiores? Molestias blanditiis iusto animi error doloribus magni deleniti cupiditate quam distinctio adipisci perspiciatis assumenda iure, soluta consequuntur. Earum, id hic? Aliquam!
Unde debitis odit, libero repellendus illum cumque dolorem dolore ex. Corrupti nisi consectetur inventore sit dolorem tempore praesentium, aut cumque? Excepturi nam cupiditate, labore eligendi assumenda debitis perspiciatis quibusdam dolor.
Assumenda iure id enim aliquid. Incidunt beatae deserunt eum debitis? Explicabo iure voluptas molestiae illum tempore. Porro nulla quod maiores laboriosam at doloribus? Temporibus dolorum modi praesentium architecto reiciendis officiis.
Delectus sed nam tempora qui nobis porro aliquid deleniti beatae itaque rerum velit dolor, nostrum repellendus officiis libero voluptatem sapiente veritatis quo commodi eligendi ullam esse hic natus rem. Assumenda?
Voluptas quos dolore nemo inventore at excepturi corrupti. Ea delectus asperiores, dolore nam impedit, sequi suscipit, aperiam molestiae maxime beatae optio. Nam aperiam impedit obcaecati dolorem odit, dolores rerum delectus?
Necessitatibus sequi voluptatum tempora obcaecati cum odio itaque explicabo atque esse commodi laborum quasi, pariatur perspiciatis dolorem culpa nemo dicta quam, officiis ipsa dolor fuga aspernatur impedit? Sed, rem doloribus.
Aliquam soluta molestiae culpa atque fugit expedita sint, quod nihil ipsam quaerat adipisci doloribus animi vel odio vero iusto quibusdam consequatur harum assumenda dicta sit accusamus hic enim. Nihil, beatae?
Perspiciatis repellendus ipsam consequuntur saepe in architecto quis! Consectetur, impedit tenetur! Officia eveniet, nihil saepe accusamus adipisci a! Facere, inventore odit dolor ad nemo libero eius dicta fugiat fuga corrupti!
Earum similique perferendis eum animi rem alias odio quisquam quas iste, veniam quam quasi quo expedita minus, accusantium quia, amet dolorum. Adipisci ex, nihil inventore quis nesciunt eligendi recusandae earum.
Ipsa animi optio commodi cum molestiae minus temporibus nulla nobis, esse iure magnam consectetur expedita dolorum veritatis error eum vitae, eligendi beatae eius. Provident officia maxime recusandae, et dolorem quod.
Delectus iusto blanditiis enim illo? Iure nisi numquam quis quidem tempore, enim sit. Quasi reiciendis iusto ut. Sapiente error tenetur quae, iste ad eaque ducimus minima ab? Perferendis, assumenda debitis.
Temporibus molestiae tenetur modi unde sit, quod beatae quia veritatis dolorum amet ratione perspiciatis. Doloribus dignissimos inventore quam quo doloremque ipsa suscipit. Rerum, doloremque est esse assumenda adipisci numquam consequatur.
Ad doloribus sunt deleniti, voluptates accusantium expedita pariatur maxime et voluptas. Quod architecto natus laudantium temporibus iure ab voluptatem, nisi rerum officiis voluptas dolore officia facilis, distinctio nobis. Facere, fuga.
Reiciendis iste repellendus earum vel molestias sapiente officiis architecto. Eligendi animi pariatur maiores iure aliquid rerum vel delectus. Officiis quod doloribus mollitia dolorem laborum animi perspiciatis repellendus architecto labore fugiat.
Ullam, voluptatibus, quae voluptas porro illum mollitia assumenda temporibus reprehenderit eligendi aperiam minima nobis quia accusantium, iste accusamus voluptate ratione. Minus necessitatibus culpa blanditiis voluptatem debitis tempora ipsa asperiores quod.
Quas nihil officia iste. Explicabo, maiores necessitatibus repellat doloribus atque provident quasi, facilis esse cumque ullam beatae ex cum, unde ad aliquid quod eius officiis. Recusandae facilis aut eos non?
Rem deserunt voluptatibus eligendi id quo quae, temporibus molestiae ab soluta, ipsum in repudiandae corporis aliquam repellat accusamus magnam ex perspiciatis assumenda non molestias, beatae consequatur reprehenderit? Laborum, id laudantium!
Ipsum molestiae quibusdam, voluptatibus sed explicabo enim veniam aspernatur facilis libero molestias dolor earum, sapiente eos voluptate in? Veritatis nulla aliquid perspiciatis repellat quisquam, doloremque voluptate! Laudantium est unde corrupti?
Delectus, nobis rem. Beatae repellendus sit velit, similique ex vitae repudiandae asperiores! Ipsam qui quod consequuntur. Illum vel suscipit omnis quibusdam quo, laboriosam ab exercitationem blanditiis amet ducimus error. Quos.
Quo illo optio dolores dolor asperiores fugit, a, quam molestiae officiis eos ducimus veniam! Dolorem ullam recusandae, consectetur ducimus eligendi ratione beatae dignissimos inventore aperiam? Vero voluptate ut veniam neque.
Aut similique illum vel nesciunt quidem laboriosam. Adipisci harum quidem nisi reiciendis, illo cum pariatur, optio iste eos soluta, atque nulla iusto culpa saepe quod repudiandae quaerat? Sunt, eligendi exercitationem.
Iste quod maiores veniam voluptatibus eius tempora, esse quae neque placeat illum dolores! At similique maiores exercitationem porro, alias ipsa fuga illum, atque adipisci dolor corrupti ad, animi totam neque?
Nisi ratione consequuntur, ipsa laboriosam unde similique provident incidunt praesentium iusto. Nesciunt neque impedit consequuntur doloribus excepturi ut, est distinctio velit alias voluptatibus, suscipit quo ab necessitatibus eaque sed tenetur!
Aliquid beatae quas provident, facilis adipisci sit fugiat tempora ipsam expedita excepturi error magnam quibusdam fugit suscipit qui assumenda ducimus. Sed harum recusandae quis fugit explicabo eveniet molestias ullam iste?
Fugiat recusandae dolorem culpa quaerat voluptas temporibus quod ut ipsa architecto quas facere, voluptatem maxime, deleniti alias vero eius totam at. Ab molestiae aperiam tempora eligendi recusandae amet dignissimos adipisci.
Soluta eveniet cupiditate enim ex quis dicta recusandae. Rerum maiores esse dolorum ducimus obcaecati voluptatem eos maxime neque magni exercitationem, numquam praesentium error accusamus non nemo nihil expedita officiis quod?
Doloremque neque modi fugiat voluptatem consequatur. Ipsa velit, fugiat repellendus accusantium perferendis dolor aspernatur facilis, maxime repudiandae inventore odio possimus illo sapiente et asperiores enim nam quasi molestiae mollitia rem.
Eligendi quisquam eius corporis et aut, eum consequuntur voluptates quasi, dolorum odio consectetur error inventore quia exercitationem animi quibusdam sunt laudantium vel voluptas tenetur qui commodi nesciunt autem quo. Cum.
Non illum et ducimus magnam quo, harum id culpa quidem beatae adipisci officiis nostrum iste dolorem eius nisi consequuntur numquam veritatis ratione assumenda a, odit mollitia temporibus vel. Et, quo!
Accusamus, odit aliquid dolore amet provident vel pariatur! Aspernatur vitae numquam voluptates tempora et explicabo. Aliquam, possimus. Blanditiis quod molestias aliquid reprehenderit. Assumenda tenetur odio possimus vero doloremque tempore incidunt.
Rem illo cupiditate animi? Accusantium reiciendis dolores maxime ut quae accusamus hic! Veritatis obcaecati vel saepe, ut neque perferendis molestiae. Quis unde mollitia quo non obcaecati quidem odio eos ipsa.
Sit dolore inventore soluta quod aliquid ad corporis, enim laudantium reprehenderit eligendi illo cumque fugit? Unde optio aperiam nostrum ut iusto, eaque nesciunt dolores suscipit officiis magni labore nisi voluptatum.
Impedit ea molestias dolorum provident et qui quis nemo quo voluptas. Est placeat quae odit repellendus molestiae quas in, modi ducimus magnam officia delectus perferendis voluptatum rerum! Numquam, necessitatibus architecto.
Non dicta cum eaque repudiandae debitis dignissimos labore? Exercitationem nesciunt harum porro dicta impedit alias explicabo non illum enim id! Minus doloremque similique animi? Expedita est similique cumque officia molestiae!
Consequuntur iusto dicta repellendus in delectus nisi porro culpa, molestiae rem iste qui voluptate perspiciatis facilis nulla molestias eaque aut veritatis hic temporibus, cupiditate nihil labore, optio illo eos. Autem?
Numquam officia, tempora illum similique quidem dignissimos dolore iste labore aliquid perspiciatis voluptatibus non aut temporibus quia, consequatur veritatis voluptates commodi! Ea saepe aperiam repellendus quos ducimus quasi. Voluptas, voluptate.
Nam animi id, consectetur tempore pariatur officiis vero eos, veniam quis saepe earum, architecto adipisci eaque alias in vel maiores omnis obcaecati fugiat. Amet, similique! Amet molestias in sunt modi?
Sequi tempora perspiciatis, nihil unde, tenetur at obcaecati autem non explicabo ullam, quod alias voluptatem molestias? Minima dignissimos maiores ipsa minus itaque odit at quaerat nulla? Dolores nihil repellat iste?
Illum, temporibus, eos ullam placeat perferendis architecto voluptate impedit, in repellendus praesentium aliquid! Eveniet debitis expedita excepturi in commodi tempora explicabo cupiditate eaque hic rem quibusdam, inventore aperiam laboriosam enim!
Perspiciatis iste nihil quos et magnam fuga cumque illum minima culpa, dignissimos ratione a blanditiis quam quis architecto labore voluptatum vitae assumenda officia id eveniet facere soluta eos tempore! Tempora.
Facere ducimus officiis amet voluptatem vitae accusamus corporis recusandae minima delectus, quam similique ab eos expedita obcaecati facilis. Doloremque incidunt ea eveniet omnis veritatis, quam sunt illo et eius odio!
Quasi porro rerum distinctio. Adipisci debitis laboriosam tenetur impedit porro dolorum aut modi, beatae quasi, eius culpa, inventore atque officia veritatis iste consequatur. Rem ipsa illo magnam dolores quibusdam ex?
Exercitationem, non cum quia laborum minus nihil optio tempore, consectetur perferendis incidunt corporis nesciunt soluta neque id iste quibusdam dolorum nemo porro. Expedita sunt qui est, ut autem suscipit officiis.
In illo quasi, numquam quaerat animi rem quod quas deleniti distinctio magni ad placeat, nemo, sint soluta accusantium sapiente ducimus corrupti est. Quae repellat delectus adipisci tenetur architecto optio tempore?
Animi vel aut voluptatibus consectetur ut blanditiis! Impedit similique quisquam atque? Assumenda numquam non dolorem temporibus iure porro quae quidem voluptas aliquid, odio nam accusamus voluptates exercitationem reiciendis. Voluptas, exercitationem.
Autem molestiae magni pariatur laborum. Dicta alias error veniam cumque ex. Eius quibusdam voluptates quidem voluptatem, excepturi, illum suscipit facere, nisi blanditiis eligendi iste ex natus facilis modi maiores quam?
Animi nisi labore ipsum, non, laboriosam voluptates eos maxime excepturi dolor pariatur saepe ad quisquam illum molestias sed numquam est minima consequuntur atque nobis voluptatum. Est voluptatibus necessitatibus voluptates reprehenderit.
Quod repellat molestias libero, aliquid non cumque eius, aliquam corrupti ipsa atque, animi facere quam temporibus similique voluptas accusamus natus illum enim explicabo? Perferendis temporibus voluptate delectus ipsa blanditiis soluta.
Delectus officiis eos non rem sint, minus voluptates, quas dolor voluptate laudantium cum aspernatur, totam sapiente corporis? Tenetur ad quo facere veniam temporibus, harum voluptatibus enim adipisci. Molestiae, quod iste.
Aliquam magnam placeat itaque saepe et doloremque eveniet iusto rem dignissimos. Sint modi blanditiis facere suscipit eveniet, reiciendis dolore temporibus sunt voluptate omnis veritatis ex a sit cum animi nisi?
Soluta, excepturi sunt. Eligendi eveniet mollitia quisquam et, distinctio deserunt. Ab qui eum explicabo blanditiis esse maiores, mollitia sapiente dolor deserunt saepe temporibus! Minus tenetur soluta ea enim suscipit expedita?
Accusantium unde, quos, dolore quam soluta excepturi corporis quo incidunt impedit modi iste praesentium facilis minima. Quaerat tempora, eos aspernatur eveniet ea dolores temporibus provident autem odit ab explicabo sint.
Laudantium, beatae porro libero, deleniti dolore eius quo nostrum in distinctio tenetur pariatur velit nam qui! Iusto temporibus autem asperiores doloribus molestias sint laborum quos, commodi voluptatem, error incidunt sit!
Dicta ex quibusdam reprehenderit quam. Aliquid tenetur accusamus non, sapiente dicta error. Asperiores facilis, illo reiciendis eveniet incidunt molestiae error temporibus voluptas debitis facere maiores aut dolorum quo saepe doloribus?
Nobis fugiat numquam totam, rem at magnam aut quibusdam dicta ab, dolorem ducimus debitis ut? Placeat culpa consectetur expedita nesciunt modi sapiente quod et dolorem provident, ut, ipsam iure vel!
Porro aliquid, vero voluptates asperiores et illum tempora odio qui, harum pariatur exercitationem amet enim placeat quod, illo quo dolorem optio voluptatibus laborum. Sint accusamus perferendis, porro tempora magnam debitis.
Vero expedita unde velit placeat animi. Sed, quia saepe velit delectus et rerum nam recusandae modi tenetur beatae cupiditate provident aliquid quibusdam fugiat itaque! Sapiente et nemo voluptate autem doloribus.
Consequuntur vero, repellendus corrupti dolore a quas vel sequi. Quasi commodi, ipsum quo sequi harum nisi earum? Quos eius debitis quidem explicabo aspernatur laudantium iure cum fugit, atque alias quaerat!
Nobis, enim? Minus laboriosam odit, iste quidem debitis natus! Ullam quae, sit consectetur illo facere non quam. Doloribus quisquam debitis, laudantium quod, culpa, asperiores numquam quibusdam dolor perspiciatis veniam labore?
Vero, error excepturi. Beatae itaque non odio animi. Iste quisquam quasi quam? Fugit minus, nam eaque recusandae tenetur vel ad quasi sint aut reprehenderit optio. Nemo iure error facilis deserunt?
Itaque, ea? Mollitia numquam enim tempora dignissimos consequuntur, earum perferendis ipsam at quos obcaecati pariatur officiis excepturi maiores natus fuga atque explicabo in culpa ea architecto quaerat. Suscipit, velit temporibus.
Quas voluptatibus id possimus dolor laboriosam corrupti ipsam earum adipisci tempora, ratione nobis tenetur aliquam autem blanditiis placeat debitis? Incidunt ex maxime alias provident quod nulla voluptas accusamus repudiandae distinctio.
Non, laboriosam. Rem voluptatum dignissimos maiores doloribus, illo nihil officia recusandae repudiandae magni ad eveniet rerum vel omnis dolorum non earum a iste perferendis dicta esse dolores libero atque incidunt?
Adipisci, harum asperiores impedit, nemo tenetur accusantium architecto minus itaque fugit quis quaerat et in doloribus unde! Cum debitis incidunt sed optio? Iusto, dolore doloremque velit cum tempora architecto vero!
Aut porro eligendi molestias numquam ratione repellat, ducimus et impedit saepe quas voluptates obcaecati nobis veniam sunt! Sit, vel soluta doloribus similique hic reprehenderit qui magnam eum in totam beatae!
Eos tempore possimus accusantium neque error. Ea, atque libero. Cupiditate iure odio molestias quos perferendis sunt eligendi a nisi nostrum! Eveniet culpa sapiente libero cum dolor perferendis asperiores quam odit.
Porro quibusdam, quaerat quae ut neque obcaecati dicta magni fuga, maxime debitis eveniet. Sequi quam, temporibus blanditiis similique eaque, facilis numquam optio vero odit, expedita autem reiciendis rerum mollitia provident?
Aliquid et aut velit aliquam debitis deserunt. Nobis, aperiam quas. Inventore, voluptatem animi! Explicabo porro alias incidunt? Mollitia saepe et soluta, non qui deleniti. Tempore alias sapiente totam sequi a!
Quas exercitationem voluptate ipsam minus ipsa eius, dicta delectus animi, ratione voluptates possimus dignissimos placeat eveniet in sit libero? Distinctio assumenda inventore voluptatem laudantium tempore voluptatum dolorem fugit ad vitae?
Mollitia ipsa obcaecati blanditiis itaque illo pariatur quasi et soluta doloremque ut vel numquam delectus non dolor, fugiat maiores tempore quibusdam reiciendis. Eos numquam tenetur vitae odit asperiores nobis esse?
Maiores praesentium cupiditate officiis alias porro labore exercitationem accusamus voluptas inventore? Repellat mollitia numquam accusantium iure sequi facere officia sed facilis! Reprehenderit assumenda omnis eaque at sint, itaque debitis? Ab!
Doloremque ipsa consectetur nostrum repudiandae totam. Enim numquam nobis quisquam, fugiat tenetur omnis autem animi laborum doloribus veniam sed aliquid nulla eos consequatur harum sint architecto! Autem ipsum nobis illum.
Animi libero eligendi hic dolorem? Nobis, asperiores dolorem nemo quis quia omnis, illo illum fuga possimus, nisi maiores. Doloremque laboriosam, sunt debitis inventore officia doloribus non ratione perspiciatis perferendis quibusdam.
Quae, repellendus minus! Adipisci totam, magni, facilis numquam, sequi vel architecto officia quasi quis tenetur sit ad aspernatur aliquid voluptas commodi consequatur iste harum sed modi laboriosam minima quae. Numquam.
Laborum est architecto vel perspiciatis libero ipsa eveniet soluta non dolores, quas laudantium enim, nam tenetur consequuntur repudiandae cupiditate! Minus eum totam reiciendis optio unde magni consectetur error laborum. Eaque!
Aspernatur eveniet, numquam tempore nemo magnam amet culpa nihil voluptas! Asperiores et harum exercitationem impedit, dolorum recusandae dicta vel esse maxime facilis id voluptatum nemo. Nulla corrupti blanditiis asperiores voluptates!
Optio nostrum aperiam sed corrupti in voluptatibus architecto iste dolor sunt vitae suscipit, sapiente quaerat placeat, ut ea dolorem maiores earum ullam, eos unde necessitatibus similique. Placeat provident fugit quidem?
Magni voluptatibus fuga modi, provident quas laudantium expedita sapiente quibusdam libero numquam deserunt eaque, eveniet soluta et praesentium nam unde rerum. Deleniti architecto aliquid possimus minima quas maiores mollitia atque.
Nobis minima quo doloribus vel, voluptatibus debitis tenetur obcaecati, in, ut magnam atque illum dolore ullam quibusdam odio suscipit distinctio ducimus incidunt aspernatur labore ipsam? Officiis, ea inventore? Nihil, ea?
Reprehenderit vitae aliquid voluptatem quasi. Asperiores, alias et quos placeat doloremque illo optio at pariatur obcaecati voluptates iure esse possimus. Obcaecati soluta ab excepturi unde, labore amet laudantium itaque esse.
Pariatur accusamus, perferendis unde asperiores quod, rerum nostrum voluptates quam placeat, provident eaque! Eum reprehenderit accusantium, maxime architecto eveniet quos molestias nam tempora aut vero aspernatur magnam non nemo unde?
Veritatis, ratione a. In animi repellat corporis sit, maiores dolor eum, obcaecati blanditiis eaque officiis, aut consequuntur maxime ratione. Ab vero perspiciatis architecto modi iusto dolores ea eos asperiores laborum.
Ipsam ex beatae velit quidem tenetur consequatur autem necessitatibus adipisci, deleniti ea, tempore eum ad fuga nulla! Quo cupiditate id excepturi fugiat animi voluptas nobis perspiciatis incidunt a. Possimus, repellat.
In magni inventore placeat recusandae. Amet, enim! Nihil assumenda, sit ex quibusdam eum perferendis aut praesentium facere corporis? Aliquid similique assumenda dicta, soluta eos impedit voluptatem molestias sequi id iusto.
Iure eveniet enim reprehenderit saepe molestiae id accusamus cumque. Numquam dolorem aperiam, perferendis delectus, aut earum impedit a labore porro placeat accusantium! Magni nam, blanditiis ab veniam suscipit hic placeat.
Harum, iusto ea voluptatum autem blanditiis totam itaque excepturi deleniti nisi sequi. Praesentium similique quia et omnis excepturi eum officia nam. Adipisci maiores vero officia at cupiditate, perferendis fugiat recusandae!
Voluptatum est temporibus unde, laboriosam expedita at ex possimus obcaecati assumenda nostrum quas sint corporis. Vitae adipisci iste nisi! Alias eius nobis quos nostrum eveniet! Ullam autem quos quia temporibus!
Necessitatibus libero, nihil obcaecati consequatur odit asperiores voluptate possimus quod laudantium nobis excepturi numquam adipisci nulla facere ut perspiciatis quia nesciunt alias veritatis! At, consectetur quidem! At voluptates distinctio possimus.
Consequatur vel, rerum sequi dicta magni mollitia magnam cupiditate perspiciatis? Alias aliquid illo praesentium et provident ipsam dolorum fugiat ex soluta iusto saepe eius blanditiis debitis eligendi placeat, suscipit laudantium?
Nobis dicta dolor ut atque! Repellendus asperiores recusandae tenetur, nihil atque at minima inventore eaque, saepe aut deserunt officia velit, facilis ullam quidem veritatis et eum corporis magni? Exercitationem, nemo!
Doloremque tenetur perspiciatis repellat rerum deserunt eveniet quia nostrum voluptatibus officiis, blanditiis reiciendis in possimus at consequuntur iste cum maiores vero asperiores provident id incidunt molestiae. Ipsam odit eos incidunt!
Corrupti suscipit non et cupiditate vitae labore! Nemo eum perspiciatis non molestiae atque sint ipsam? Quasi dicta aliquam quo explicabo in, omnis modi corrupti ipsam voluptas cupiditate minima voluptatibus dignissimos!
</body>

</html>
@endsection