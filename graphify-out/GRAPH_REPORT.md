# Graph Report - unicolead  (2026-10-05)

## Corpus Check
- 89 files · ~73,277 words
- Verdict: corpus is large enough that graph structure adds value.
- Unclassified: 32 file(s) not represented in the graph (top: (none) 16, .woff2 7, .css 4)

## Summary
- 5440 nodes · 17571 edges · 151 communities (116 shown, 35 thin omitted)
- Extraction: 90% EXTRACTED · 10% INFERRED · 0% AMBIGUOUS · INFERRED: 1670 edges (avg confidence: 0.85)
- Token cost: 0 input · 0 output

## Community Hubs (Navigation)
- code-editor.js
- rich-editor.js
- components/chart.js
- .forEach
- stat/chart.js
- t
- draw
- fromObject
- resolve
- .slice
- markdown-editor.js
- update
- constructor
- _update
- get
- y
- support.js
- facet
- nodesBetween
- Ae
- flush
- tables.js
- E
- updateElements
- ViewsRelationManager.php
- advance
- i
- i
- reduce
- n
- create
- getContext
- te
- s
- ne
- notifications.js
- slice
- of
- Cn
- e
- parse
- r
- _update
- forward
- e
- components/select.js
- destroy
- Si
- slider.js
- draw
- constructor
- ir
- eq
- ce
- Wi
- columns/select.js
- getDatasetMeta
- xt
- selectOption
- toString
- file-upload.js
- fn
- Illuminate\Database\Schema\Blueprint
- echo.js
- create
- BrochureLinkMail
- invert
- Xt
- et
- sliceDoc
- Y
- S
- filament/app.js
- be
- P
- AdminPanelProvider.php
- package.json
- N
- constructor
- fn
- _notify
- closeDropdown
- it
- fn
- color-picker.js
- User
- require
- Ew
- A
- bootstrap/app.php
- UserFactory.php
- le
- renderOptions
- Mt
- Lead
- composer.json
- r
- t
- date-time-picker.js
- selectOption
- addInputRules
- valid
- _each
- actions/actions.js
- Fe
- schemas.js
- FetchDemoRequests.php
- require-dev
- scripts
- rt
- README.md
- config
- sl
- TestCase
- components/actions.js
- AppServiceProvider
- psr-4
- yl
- clickPercent
- da
- ExampleTest
- c
- extra
- pt
- Ae
- Controller.php

## God Nodes (most connected - your core abstractions)
1. `constructor()` - 147 edges
2. `update()` - 145 edges
3. `resolve()` - 98 edges
4. `y()` - 92 edges
5. `_update()` - 85 edges
6. `node()` - 78 edges
7. `te()` - 76 edges
8. `constructor()` - 74 edges
9. `of()` - 68 edges
10. `slice()` - 67 edges

## Surprising Connections (you probably didn't know these)
- `GET /b/{token}()` --calls--> `Lead`  [EXTRACTED]
  routes/web.php → app/Models/Lead.php
- `VariableDefinition()` --indirect_call--> `Zx()`  [INFERRED]
  public/js/filament/forms/components/code-editor.js → public/js/filament/forms/components/rich-editor.js
- `[x]()` --indirect_call--> `H()`  [INFERRED]
  public/js/filament/forms/components/color-picker.js → public/js/filament/forms/components/markdown-editor.js
- `Ew()` --indirect_call--> `ra()`  [INFERRED]
  public/js/filament/forms/components/rich-editor.js → public/js/filament/forms/components/file-upload.js
- `Oe()` --indirect_call--> `Ol()`  [INFERRED]
  public/js/filament/forms/components/file-upload.js → public/js/filament/forms/components/rich-editor.js

## Import Cycles
- None detected.

## Communities (151 total, 35 thin omitted)

### Community 0 - "code-editor.js"
Cohesion: 0.01
Nodes (102): Ac(), addCompletion(), addCompletions(), addNamespace(), addNamespaceObject(), Ag(), attrs(), b0() (+94 more)

### Community 1 - "rich-editor.js"
Cohesion: 0.01
Nodes (175): $0(), Ab(), ac(), addAttributes(), addExtensions(), addHackNode(), addNode(), addOptions() (+167 more)

### Community 2 - "components/chart.js"
Cohesion: 0.01
Nodes (143): abutsStart(), addControllers(), addPlugins(), addScales(), alpha(), bd(), Be(), bm() (+135 more)

### Community 3 - ".forEach"
Cohesion: 0.03
Nodes (141): _a(), addGlobalAttributes(), addNodeView(), addProseMirrorPlugins(), af(), c(), d(), b0() (+133 more)

### Community 4 - "stat/chart.js"
Cohesion: 0.03
Nodes (86): an(), applyStack(), ar(), ba(), beforeDatasetsDraw(), beforeDraw(), Bn(), color() (+78 more)

### Community 5 - "t"
Cohesion: 0.03
Nodes (127): aa(), acceptToken(), allows(), AQ(), au(), AX(), Bg(), a() (+119 more)

### Community 6 - "draw"
Cohesion: 0.03
Nodes (129): acquireContext(), adjustHitBoxes(), afterDraw(), Ao(), aspectRatio(), bh(), buildTicks(), calculateCircumference() (+121 more)

### Community 7 - "fromObject"
Cohesion: 0.03
Nodes (124): ac(), ae(), after(), ag(), Al(), Am(), before(), bl() (+116 more)

### Community 8 - "resolve"
Cohesion: 0.06
Nodes (117): ad(), addKeyboardShortcuts(), addNodeMark(), after(), am(), Ay(), bc(), before() (+109 more)

### Community 9 - ".slice"
Cohesion: 0.05
Nodes (107): accepts(), add(), addCommands(), ak(), allowsMarks(), Ap(), apply(), applyInner() (+99 more)

### Community 10 - "markdown-editor.js"
Cohesion: 0.05
Nodes (93): ad(), af(), al(), An(), ao(), Ba(), bo(), Bt() (+85 more)

### Community 11 - "update"
Cohesion: 0.03
Nodes (90): activateHover(), addChunk(), addInner(), adjust(), annotation(), bidiSpans(), bS(), build() (+82 more)

### Community 12 - "constructor"
Cohesion: 0.04
Nodes (87): add(), addEventListener(), addInfoPane(), addToSet(), addWindowListeners(), applyEdits(), B(), bf() (+79 more)

### Community 13 - "_update"
Cohesion: 0.04
Nodes (83): $a(), addElements(), afterBuildTicks(), afterCalculateLabelRotation(), afterDataLimits(), afterFit(), afterSetDimensions(), afterTickToLabelConversion() (+75 more)

### Community 14 - "get"
Cohesion: 0.04
Nodes (79): addBlockWidget(), addBreak(), addComposition(), addDelimiter(), addInlineWidget(), addLine(), addLineStart(), addLineStartIfNotCovered() (+71 more)

### Community 15 - "y"
Cohesion: 0.14
Nodes (75): Dg(), Ig(), Se(), b(), Be(), $c(), X(), me() (+67 more)

### Community 16 - "support.js"
Cohesion: 0.05
Nodes (67): acquireScrollLock(), ae(), ai(), Ao(), as(), B(), close(), closeQuietly() (+59 more)

### Community 17 - "facet"
Cohesion: 0.04
Nodes (77): accept(), addElement(), applyChanges(), balanced(), baseIndent(), baseIndentFor(), blockAt(), cd() (+69 more)

### Community 18 - "nodesBetween"
Cohesion: 0.05
Nodes (76): addAll(), addDOM(), addElement(), addElementByRule(), addMark(), addPasteRules(), addStoredMark(), addTextNode() (+68 more)

### Community 19 - "Ae"
Cohesion: 0.08
Nodes (71): _a(), Ae(), ai(), ar(), as(), at(), bc(), bf() (+63 more)

### Community 20 - "flush"
Cohesion: 0.04
Nodes (73): ag(), Ar(), Bd(), cg(), $d(), deleteSelection(), descAt(), dg() (+65 more)

### Community 21 - "tables.js"
Cohesion: 0.08
Nodes (69): A(), ae(), areRecordsPartiallySelected(), areRecordsSelected(), areRecordsToggleable(), B(), be(), C() (+61 more)

### Community 22 - "E"
Cohesion: 0.05
Nodes (69): aa(), active(), add(), _animateOptions(), average(), B(), bo(), bs() (+61 more)

### Community 23 - "updateElements"
Cohesion: 0.04
Nodes (69): addBox(), addEventListener(), afterAutoSkip(), au(), bindEvents(), bindResponsiveEvents(), bindUserEvents(), br() (+61 more)

### Community 24 - "ViewsRelationManager.php"
Cohesion: 0.06
Nodes (13): LeadResource, CreateLead, EditLead, ListLeads, ViewsRelationManager, LeadForm, LeadsTable, LeadViewResource (+5 more)

### Community 25 - "advance"
Cohesion: 0.05
Nodes (63): addChild(), addGaps(), addLeafElement(), addNode(), advance(), ATXHeading(), balance(), blank() (+55 more)

### Community 26 - "i"
Cohesion: 0.05
Nodes (58): active(), al(), bd(), Bh(), blockTiles(), blur(), clearDelayedAndroidKey(), compute() (+50 more)

### Community 27 - "i"
Cohesion: 0.06
Nodes (61): ad(), applyStack(), beforeLayout(), bi(), bu(), cf(), dataset(), l() (+53 more)

### Community 28 - "reduce"
Cohesion: 0.06
Nodes (60): addActions(), advanceFully(), advanceStack(), allActions(), apply(), c0(), canShift(), checkAsyncSchedule() (+52 more)

### Community 29 - "n"
Cohesion: 0.07
Nodes (58): append(), as(), au(), close(), closeFrontierNode(), connectSelection(), copy(), cut() (+50 more)

### Community 30 - "create"
Cohesion: 0.05
Nodes (60): Cl(), clone(), create(), Ct(), dtFormatter(), Ec(), eras(), expandFormat() (+52 more)

### Community 31 - "getContext"
Cohesion: 0.06
Nodes (60): jo(), acquireContext(), Ao(), bl(), Ca(), calculateLabelRotation(), _calculatePadding(), ci() (+52 more)

### Community 32 - "te"
Cohesion: 0.04
Nodes (12): Ud(), Aa(), Bi(), Bn(), br(), Id(), ji(), qd() (+4 more)

### Community 33 - "s"
Cohesion: 0.05
Nodes (54): themeClasses(), Nn(), addEventListener(), al(), bindEvents(), bindResponsiveEvents(), bindUserEvents(), cl() (+46 more)

### Community 34 - "ne"
Cohesion: 0.09
Nodes (53): ca(), de(), df(), dt(), Ee(), ei(), fd(), Ft() (+45 more)

### Community 35 - "notifications.js"
Cohesion: 0.06
Nodes (31): actions(), button(), c(), close(), configureAnimations(), configureTransitions(), constructor(), danger() (+23 more)

### Community 36 - "slice"
Cohesion: 0.06
Nodes (52): ch(), d0(), De(), decompose(), decomposeLeft(), decomposeRight(), defineModifier(), E$() (+44 more)

### Community 37 - "of"
Cohesion: 0.05
Nodes (50): baseTheme(), between(), bu(), cO(), compare(), r(), dr(), DY() (+42 more)

### Community 38 - "Cn"
Cohesion: 0.12
Nodes (47): Cn(), b(), Be(), Ce(), De(), dn(), _e(), Fe() (+39 more)

### Community 39 - "e"
Cohesion: 0.07
Nodes (51): af(), apply(), at(), Ba(), Bf(), dc(), determineDataLimits(), ef() (+43 more)

### Community 40 - "parse"
Cohesion: 0.06
Nodes (51): afterAutoSkip(), bs(), Bt(), buildLookupTable(), buildTicks(), Cn(), determineDataLimits(), l() (+43 more)

### Community 41 - "r"
Cohesion: 0.13
Nodes (45): ar(), c(), f(), d(), de(), di(), g(), Gt() (+37 more)

### Community 42 - "_update"
Cohesion: 0.07
Nodes (46): afterBuildTicks(), afterCalculateLabelRotation(), afterDataLimits(), afterDatasetsUpdate(), afterFit(), afterSetDimensions(), afterTickToLabelConversion(), afterUpdate() (+38 more)

### Community 43 - "forward"
Cohesion: 0.06
Nodes (44): addActive(), addChanges(), addSelection(), Ar(), as(), be(), chunkEnd(), compose() (+36 more)

### Community 44 - "e"
Cohesion: 0.11
Nodes (42): _a(), e(), Bi(), br(), Bt(), ca(), ct(), Dn() (+34 more)

### Community 45 - "components/select.js"
Cohesion: 0.09
Nodes (32): A(), b(), Bt(), D(), E(), en(), Et(), getLabelsForMultipleSelection() (+24 more)

### Community 46 - "destroy"
Cohesion: 0.07
Nodes (39): addRange(), atLastNode(), Ci(), destroy(), enforceCursorAssoc(), Fi(), flush(), flushSoon() (+31 more)

### Community 47 - "Si"
Cohesion: 0.14
Nodes (40): ae(), At(), bi(), bn(), ci(), cn(), ct(), de() (+32 more)

### Community 48 - "slider.js"
Cohesion: 0.10
Nodes (37): Ke(), ar(), Be(), Ce(), De(), _e(), Ee(), er() (+29 more)

### Community 49 - "draw"
Cohesion: 0.08
Nodes (37): addElements(), Ae(), bi(), _checkEventBindings(), clear(), _computeLabelArea(), _destroy(), di() (+29 more)

### Community 50 - "constructor"
Cohesion: 0.08
Nodes (36): Mf(), Ot(), add(), apply(), bo(), _cachedScopes(), chartOptionScopes(), configure() (+28 more)

### Community 51 - "ir"
Cohesion: 0.13
Nodes (34): Ft(), ir(), ce(), de(), Dt(), ee(), Et(), fe() (+26 more)

### Community 52 - "eq"
Cohesion: 0.08
Nodes (35): a$(), activeForPoint(), addBlock(), addLineDeco(), b1(), blankContent(), boundChange(), commit() (+27 more)

### Community 53 - "ce"
Cohesion: 0.12
Nodes (35): Ac(), bl(), cd(), ee(), ue(), ce(), cl(), Cn() (+27 more)

### Community 54 - "Wi"
Cohesion: 0.11
Nodes (34): Rd(), Ax(), bx(), c(), ct(), dx(), ex(), Fh() (+26 more)

### Community 55 - "columns/select.js"
Cohesion: 0.09
Nodes (23): addBadgesForSelectedOptions(), addSingleBadge(), applyDisabledState(), createBadgeElement(), createRemoveButton(), disable(), E(), en() (+15 more)

### Community 56 - "getDatasetMeta"
Cohesion: 0.08
Nodes (34): afterDatasetsUpdate(), An(), ar(), beforeDatasetDraw(), beforeDatasetsDraw(), beforeDraw(), generateLabels(), getDatasetMeta() (+26 more)

### Community 57 - "xt"
Cohesion: 0.12
Nodes (33): aa(), ba(), cr(), da(), dt(), ei(), Fi(), fn() (+25 more)

### Community 58 - "selectOption"
Cohesion: 0.15
Nodes (33): addSingleSelectionDisplay(), closeDropdown(), constructor(), createOptionElement(), deferPositionDropdown(), destroy(), filterOptions(), focusNextOption() (+25 more)

### Community 59 - "toString"
Cohesion: 0.08
Nodes (31): atEnd(), atStart(), check(), checkAttrs(), el(), endIndex(), fromJSON(), getObj() (+23 more)

### Community 60 - "file-upload.js"
Cohesion: 0.07
Nodes (12): Vm(), constructor(), define(), dm(), _freeze(), getAllExtensions(), gm(), Il() (+4 more)

### Community 61 - "fn"
Cohesion: 0.11
Nodes (27): Ah(), at(), Ba(), Ch(), cx(), Eh(), Fi(), fn() (+19 more)

### Community 62 - "Illuminate\Database\Schema\Blueprint"
Cohesion: 0.12
Nodes (10): {closure#1}(), {closure#2}(), {closure#3}(), {closure#1}(), {closure#2}(), {closure#1}(), {closure#2}(), {closure#3}() (+2 more)

### Community 63 - "echo.js"
Cohesion: 0.09
Nodes (11): ar(), b(), cr(), d(), f(), Me(), P(), qt() (+3 more)

### Community 64 - "create"
Cohesion: 0.11
Nodes (27): Ah(), applyTransaction(), asSingle(), baseDirAt(), bidiIn(), bidiSpansAt(), create(), dirAt() (+19 more)

### Community 65 - "BrochureLinkMail"
Cohesion: 0.18
Nodes (3): BrochureLinkMail, Reminder14dMail, Reminder7dMail

### Community 66 - "invert"
Cohesion: 0.13
Nodes (24): addMaps(), addStep(), addTransform(), appendMap(), appendMapping(), appendMappingInverted(), compress(), emptyItemCount() (+16 more)

### Community 67 - "Xt"
Cohesion: 0.18
Nodes (24): bi(), bn(), ci(), cn(), ct(), de(), di(), dn() (+16 more)

### Community 68 - "et"
Cohesion: 0.11
Nodes (24): alpha(), co(), es(), et(), getRange(), go(), greyscale(), hslString() (+16 more)

### Community 69 - "sliceDoc"
Cohesion: 0.13
Nodes (22): aO(), charCategorizer(), cS(), Fc(), getCursor(), getDeco(), gT(), highlight() (+14 more)

### Community 70 - "Y"
Cohesion: 0.15
Nodes (22): A(), An(), b(), Bt(), D(), F(), ht(), $i() (+14 more)

### Community 71 - "S"
Cohesion: 0.13
Nodes (22): buildOrUpdateElements(), da(), _dataCheck(), drawTitle(), fr(), getDataset(), getPadding(), gs() (+14 more)

### Community 72 - "filament/app.js"
Cohesion: 0.12
Nodes (11): B(), C(), close(), G(), init(), setUpResizeObserver(), U(), x() (+3 more)

### Community 73 - "be"
Cohesion: 0.13
Nodes (20): aa(), ai(), be(), darken(), desaturate(), _e(), Ea(), c() (+12 more)

### Community 74 - "P"
Cohesion: 0.11
Nodes (20): ct(), Ds(), Fs(), getActiveElements(), getElementsAtEventForMode(), getScaleForId(), gr(), Is() (+12 more)

### Community 76 - "package.json"
Cohesion: 0.12
Nodes (17): devDependencies, concurrently, laravel-vite-plugin, tailwindcss, @tailwindcss/vite, vite, private, $schema (+9 more)

### Community 77 - "N"
Cohesion: 0.19
Nodes (19): [g](), ae(), A(), E(), at(), be(), Ct(), Gt() (+11 more)

### Community 78 - "constructor"
Cohesion: 0.11
Nodes (19): Bc(), bg(), chartOptionScopes(), constructor(), Cs(), dg(), features(), fg() (+11 more)

### Community 79 - "fn"
Cohesion: 0.22
Nodes (18): An(), Ce(), ei(), fn(), Ft(), Ie(), Le(), ni() (+10 more)

### Community 80 - "_notify"
Cohesion: 0.14
Nodes (18): active(), _animateOptions(), br(), cancel(), _createAnimations(), _createDescriptors(), _descriptors(), getPlugin() (+10 more)

### Community 81 - "closeDropdown"
Cohesion: 0.23
Nodes (17): applyDisabledState(), closeDropdown(), constructor(), destroy(), disable(), enable(), focusNextOption(), focusPreviousOption() (+9 more)

### Community 82 - "it"
Cohesion: 0.24
Nodes (17): ae(), At(), Dt(), fi(), gn(), hi(), it(), Me() (+9 more)

### Community 83 - "fn"
Cohesion: 0.24
Nodes (17): Ce(), ei(), fn(), Ft(), Ie(), Le(), ni(), oe() (+9 more)

### Community 84 - "color-picker.js"
Cohesion: 0.14
Nodes (3): style(), update(), [x]()

### Community 86 - "require"
Cohesion: 0.14
Nodes (14): require, dutchcodingcompany/filament-socialite, filament/filament, filament/spatie-laravel-media-library-plugin, laravel/framework, laravel/socialite, laravel/tinker, owenvoke/blade-fontawesome (+6 more)

### Community 87 - "Ew"
Cohesion: 0.23
Nodes (14): Ei(), Fr(), Kc(), ki(), mt(), Pc(), Vr(), xa() (+6 more)

### Community 88 - "A"
Cohesion: 0.21
Nodes (14): A(), As(), buildOrUpdateScales(), _computeLabelSizes(), cr(), ensureScalesHaveIDs(), getScale(), gl() (+6 more)

### Community 89 - "bootstrap/app.php"
Cohesion: 0.22
Nodes (4): {closure#1}(), {closure#2}(), {closure#3}(), GET /b/{token}()

### Community 91 - "le"
Cohesion: 0.23
Nodes (13): De(), Ee(), Fl(), le(), mm(), pe(), q(), qe() (+5 more)

### Community 92 - "renderOptions"
Cohesion: 0.37
Nodes (13): createOptionElement(), deferPositionDropdown(), filterOptions(), handleSearch(), hideLoadingState(), openDropdown(), populateLabelRepositoryFromOptions(), positionDropdown() (+5 more)

### Community 93 - "Mt"
Cohesion: 0.19
Nodes (13): apply(), At(), fs(), go(), Hr(), T(), ir(), it() (+5 more)

### Community 94 - "Lead"
Cohesion: 0.23
Nodes (3): FetchDemoRequests, Lead, LeadView

### Community 95 - "composer.json"
Cohesion: 0.17
Nodes (11): autoload-dev, psr-4, description, keywords, license, minimum-stability, name, prefer-stable (+3 more)

### Community 96 - "r"
Cohesion: 0.17
Nodes (12): Be(), ei(), ii(), le(), ni(), oi(), r(), ri() (+4 more)

### Community 97 - "t"
Cohesion: 0.20
Nodes (11): di(), e(), g(), Ht(), i(), Ie(), Re(), t() (+3 more)

### Community 98 - "date-time-picker.js"
Cohesion: 0.29
Nodes (7): d(), e(), i(), m(), r(), s(), t()

### Community 99 - "selectOption"
Cohesion: 0.24
Nodes (12): addBadgesForSelectedOptions(), addSingleBadge(), addSingleSelectionDisplay(), createBadgeElement(), createRemoveButton(), getLabelForSingleSelection(), getSelectedOptionLabel(), hideMaxItemsMessage() (+4 more)

### Community 100 - "addInputRules"
Cohesion: 0.20
Nodes (11): cw(), addInputRules(), ah(), contains(), gi(), splitAt(), toISOTime(), toMillis() (+3 more)

### Community 101 - "valid"
Cohesion: 0.35
Nodes (11): addInner(), bu(), dy(), findIndex(), mapInner(), Mo(), no(), valid() (+3 more)

### Community 102 - "_each"
Cohesion: 0.20
Nodes (11): addControllers(), addPlugins(), addScales(), _each(), _exec(), _getRegistryForType(), isForType(), removeControllers() (+3 more)

### Community 103 - "actions/actions.js"
Cohesion: 0.44
Nodes (8): closeModal(), generateModalId(), getActionNestingIndexFromModalId(), init(), openModal(), rememberPreviouslyFocusedElement(), restorePreviouslyFocusedElement(), syncActionModals()

### Community 104 - "Fe"
Cohesion: 0.20
Nodes (10): Ce(), De(), Dt(), Fe(), He(), ir(), Mt(), nr() (+2 more)

### Community 107 - "require-dev"
Cohesion: 0.22
Nodes (9): require-dev, fakerphp/faker, laravel/boost, laravel/pail, laravel/pao, laravel/pint, mockery/mockery, nunomaduro/collision (+1 more)

### Community 108 - "scripts"
Cohesion: 0.22
Nodes (9): scripts, dev, post-autoload-dump, post-create-project-cmd, post-root-package-install, post-update-cmd, pre-package-uninstall, setup (+1 more)

### Community 109 - "rt"
Cohesion: 0.29
Nodes (8): ca(), Dp(), _e(), Ea(), nm(), rt(), xt(), ya()

### Community 110 - "README.md"
Cohesion: 0.25
Nodes (7): About Laravel, Agentic Development, Code of Conduct, Contributing, Learning Laravel, License, Security Vulnerabilities

### Community 111 - "config"
Cohesion: 0.29
Nodes (7): pestphp/pest-plugin, php-http/discovery, config, allow-plugins, optimize-autoloader, preferred-install, sort-packages

### Community 112 - "sl"
Cohesion: 0.33
Nodes (7): Cp(), da(), Gp(), kp(), Np(), sl(), Vp()

### Community 116 - "psr-4"
Cohesion: 0.40
Nodes (5): autoload, psr-4, App\\, Database\\Factories\\, Database\\Seeders\\

### Community 118 - "yl"
Cohesion: 0.40
Nodes (5): Bp(), om(), Op(), rl(), yl()

### Community 119 - "clickPercent"
Cohesion: 0.60
Nodes (5): clickPercent(), getPosition(), mouseUp(), movePlayhead(), timelineClicked()

### Community 120 - "da"
Cohesion: 0.60
Nodes (5): da(), fa(), Ln(), Vt(), wf()

### Community 123 - "c"
Cohesion: 0.67
Nodes (4): c(), o(), p(), s()

### Community 125 - "extra"
Cohesion: 0.67
Nodes (3): extra, laravel, dont-discover

### Community 126 - "pt"
Cohesion: 0.67
Nodes (3): H(), ji(), pt()

### Community 127 - "Ae"
Cohesion: 0.67
Nodes (3): Ae(), Bt(), ne()

## Knowledge Gaps
- **67 isolated node(s):** `Controller`, `$schema`, `name`, `type`, `description` (+62 more)
  These have ≤1 connection - possible missing edges or undocumented components. (Counts symbols only; 775 node(s) total have ≤1 connection when file, concept and rationale nodes are included.)
- **35 thin communities (<3 nodes) omitted from report** — run `graphify query` to explore isolated nodes.

## Suggested Questions
_Questions this graph is uniquely positioned to answer:_

- **Why does `Qe()` connect `e` to `s`, `stat/chart.js`, `et`, `be`, `markdown-editor.js`, `slider.js`, `support.js`, `tables.js`, `i`, `Mt`?**
  _High betweenness centrality (0.047) - this node is a cross-community bridge._
- **Are the 12 inferred relationships involving `constructor()` (e.g. with `gQ()` and `Dn()`) actually correct?**
  _`constructor()` has 12 INFERRED edges - model-reasoned connections that need verification._
- **What connects `Controller`, `$schema`, `name` to the rest of the system?**
  _67 weakly-connected nodes found - possible documentation gaps or missing edges._
- **Should `code-editor.js` be split into smaller, more focused modules?**
  _Cohesion score 0.009422694094226941 - nodes in this community are weakly interconnected._
- **Why does `update()` connect `update` to `code-editor.js`, `rich-editor.js`, `.forEach`, `t`, `draw`, `.slice`, `markdown-editor.js`, `constructor`, `get`, `y`, `facet`, `Ae`, `E`, `i`, `reduce`, `s`, `slice`, `of`, `forward`, `destroy`, `eq`, `Wi`, `create`, `sliceDoc`?**
  _High betweenness centrality (0.045) - this node is a cross-community bridge._
- **Are the 19 inferred relationships involving `update()` (e.g. with `r()` and `ia()`) actually correct?**
  _`update()` has 19 INFERRED edges - model-reasoned connections that need verification._
- **Should `rich-editor.js` be split into smaller, more focused modules?**
  _Cohesion score 0.012589537660082483 - nodes in this community are weakly interconnected._