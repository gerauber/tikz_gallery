
<div class="text-container">Here is a selection of TikZ illustrations created throughout my academic journey. 
    These images represent only a small portion of the diagrams and visualizations I've produced along the way, 
    highlighting various concepts and topics. While this collection is not exhaustive, 
    it offers a glimpse into the work I’ve done over the years using TikZ. </div>

<!-- block -->
<div class="code-picture-container">
    <pre class="code-block">
        <p> Cold Plasma</p>
        <code>
\usepackage{tkz-euclide}
\usetikzlibrary{hobby}
...
\begin{tikzpicture}[use Hobby shortcut,closed=true]
    % draw the ellipses
    \draw[draw=black] (0, 1) ellipse [x radius = 4, y radius = 1];
    \coordinate (P) at ($(0, 0) + (0:4 and 1)$);
    \draw ($(0, 0) + (0:4 and 1)$(P) arc
    (0:-180:4cm and 1cm);
    \draw[draw=black] (-4,0) -- (-4,1);
    \draw[draw=black] (4,0) -- (4,1);
    \draw[-latex] (0, 7) ellipse [x radius = 4, y radius = 1];
    \coordinate (A) at ($(0, 6) + (0:4 and 1)$);
    \draw ($(0, 6) + (0:4 and 1)$(A) arc
    (0:-180:4cm and 1cm);
    \draw[draw=black] (-4,6) -- (-4,7);
    \draw[draw=black] (4,6) -- (4,7);
    \draw[-latex] (0, 7) ellipse [x radius = 3, y radius = 0.7];
    % draw the substrate
    \tkzDefPoints{-1.75/1.6/a, 2.25/1.6/b, 1.75/0.6/c, -2.25/0.6/d, -2.25/0.5/e, 1.75/0.5/f, 2.25/1.5/g}
    \fill [color=gray!20] (a) -- (b) -- (c) -- (d);
    \fill [color=gray!20] (d) -- (e) -- (f) -- (c);
    \fill [color=gray!20] (c) -- (f) -- (g) -- (b);
    \draw[draw=black] (a) -- (b) -- (c) -- (d) -- (a);
    \draw[draw=black] (d) -- (e) -- (f) -- (g) -- (b);
    \draw[draw=black] (f) -- (c);
    % draw the plasma
    \filldraw[fill=violet!20] (-4,3).. (-3,4.5).. (-1,4.5).. (0,4.3).. (1,4.5).. (2,4.5).. (3,4.3).. (4,3).. (1,2.5).. (-2, 2.5) ;
    % draw the dots in the plasma, as well as their arrows
    \tkzDefPoints{-2/3/pa, -3/3.2/pb, -2.5/3.5/pc, -1.5/3.5/pd, -1.7/4.3/pe, -2.8/4.1/pf, 2/3/pg, 3/2.6/ph, 2.5/3.5/pi, 1.5/3.5/pj, 1.7/4.3/pk, 2.8/4.1/pl, -0.5/3.8/pm, 0.5/4.1/pn, 0.5/3.3/po, -0.5/3.2/pp}
    \foreach \x in {a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p} {
        \filldraw[fill=violet!50, draw=violet!50] (p\x) circle (1pt);
    }
    \draw[draw=violet!70] (pe) -- (-1.7,5.06);
    \draw[->, draw=violet!70] (pf) -- (-2.8,4.8);
    \draw[->, draw=violet!70] (pm) -- (-0.5,4.6);
    \draw[->, draw=violet!70] (pn) -- (0.5,4.7);
    \draw[draw=violet!70] (pk) -- (1.7,5.06);
    \draw[->, draw=violet!70] (pl) -- (2.8,4.7);
    % draw the dots on the substrate, and their arrows
    \tkzDefPoints{-1/4.8/qa, 1/3.5/qb, -1.6/0.8/qc, -1.4/1.4/qd, 0/1.3/qe, 0.4/0.9/qf, 1.8/1.4/qg, 1.6/0.8/qh, -0.4/1/qi}
    \foreach \x in {a, b, c, d, e, f, g, h, i} {
        \filldraw[fill=brown!80, draw=brown!80] (q\x) circle (2pt);
    }
    \draw[->, draw=brown!90] (-1,5) -- (-1,1);
    \draw[->, draw=brown!90] (1,5) -- (1,1);
    % name the different parts of the drawing
    \tkzDefPoints{5/3/da1, 4.1/3/da2, 5/8.3/db1, 2/8.3/db2, 2/7/db3, 5/7.6/dc1, 3.5/7.6/dc2, 3.5/7/dc3, 5/4.8/dd1, 0/4.8/dd2, 0/5/dd3, 5/1/de1, 2.1/1/de2}
    \draw[->] (da1) -- (da2);
    \draw (db1) -- (db2);
    \draw[->] (db2) -- (db3);
    \draw (dc1) -- (dc2);
    \draw[->] (dc2) -- (dc3);
    \draw (dd1) -- (dd2);
    \draw[->] (dd2) -- (dd3);
    \draw[->] (de1) -- (de2);
    \tkzLabelPoint[right=0pt, yshift=0pt](da1){\huge{Plasma}}
    \tkzLabelPoint[right=0pt, yshift=-22pt](da1){\huge{(Ar$^+$+$e^-$)}}
    \tkzLabelPoint[right=0pt, yshift=0pt](db1){\huge{Cathode}}
    \tkzLabelPoint[right=0pt, yshift=0pt](dc1){\huge{Anode}}
    \tkzLabelPoint[right=0pt, yshift=0pt](dd1){\huge{Target}}
    \tkzLabelPoint[right=0pt, yshift=-22pt](dd1){\huge{(ZnO:Al)}}
    \tkzLabelPoint[right=0pt, yshift=0pt](de1){\huge{Substrate}}
    \tkzLabelPoint[right=0pt, yshift=-22pt](de1){\huge{(Sample)}}
\end{tikzpicture}
        </code>
    </pre>
    <img src="tikz/cold_plasma.svg" alt="cold plasma" class="picture-block">
</div>

<!-- block -->
<div class="code-picture-container">
    <pre class="code-block">
        <p> Light Projection</p>
        <code>
\usepackage{tkz-euclide}
\usetikzlibrary{hobby}
...
\begin{tikzpicture}[use Hobby shortcut,closed=true]
    \tkzDefPoints{0/-2.2/a, 0/-2/b, 8/-2/c, 8/-2.2/d, 2/0/e, 10/-0.2/f, 10/0/g}
    
    \tkzDefPoints{4.6/-0.3/ta, 6.4/-0.3/tb, 5.4/-1.3/tc, 3.6/-1.3/td, 3.6/-1.4/te, 5.4/-1.4/tf, 6.4/-0.4/tg}
    
    \fill [color=gray!20] (a) -- (b) -- (c) -- (d) -- (a);
    \fill [color=gray!20] (b) -- (c) -- (g) -- (e) -- (b);
    \fill [color=gray!20] (c) -- (d) -- (f) -- (g) -- (c);
    \draw[draw=black] (a) -- (b) -- (c) -- (d) -- (a);
    \draw[draw=black] (c) -- (g) -- (e) -- (b);
    \draw[draw=black] (d) -- (f) -- (g) -- (c);
    \fill [color=gray!0] (ta) -- (tb) -- (tc) -- (td) -- (ta);
    \fill [color=gray!0] (tc) -- (td) -- (te) -- (tf) -- (tc);
    \fill [color=gray!0] (tc) -- (tf) -- (tg) -- (tb) -- (tc);
    \draw[draw=black] (ta) -- (tb) -- (tc) -- (td) -- (ta);
    \draw[draw=black] (td) -- (te) -- (tf) -- (tc);
    \draw[draw=black] (tc) -- (tf) -- (tg) -- (tb);
    
    \tkzDefPoints{5/5/ccg, 3.05/5.15/cca, 3.55/4.55/ccb, 5.5/4.4/ccc, 6.45/5.45/ccd, 4.5/5.6/cce, 6.95/4.85/ccf}
    
    \draw[draw=black] (5, 5) ellipse [x radius = 1, y radius = 0.3];
    \draw[draw=black] (5.5, 4.4) ellipse [x radius = 1, y radius = 0.3];
    \draw[draw=black] (3.55, 4.55) ellipse [x radius = 1, y radius = 0.3];
    \draw[draw=black] (3.05, 5.15) ellipse [x radius = 1, y radius = 0.3];
    \draw[draw=black] (4.5, 5.6) ellipse [x radius = 1, y radius = 0.3];
    \draw[draw=black] (6.45, 5.45) ellipse [x radius = 1, y radius = 0.3];
    \draw[draw=black] (6.95, 4.85) ellipse [x radius = 1, y radius = 0.3];
    
    
    \tkzDefPoints{2.05/5.15/la, 3.5/5.6/lb, 5.5/5.6/lc, 7.45/5.45/ld, 7.95/4.85/le, 6.5/4.4/lf, 2.55/4.55/lg}
    
    \tkzDefPoints{2.05/6.35/laa, 3.5/6.8/lbb, 5.5/6.8/lcc, 7.45/6.65/ldd, 7.95/6.05/lee, 6.5/4.55/lff, 2.55/4.85/lgg}
    
    \foreach \x in {a, b, c, d, e, f, g} {
    \draw[draw=black] (l\x) -- (l\x\x);
    }
    
    \tkzDefPoint(5,8){cent}
    \foreach \x in {a, b, c, d, e} {
    \draw[draw=black, dashed,shorten >= 0.1cm] (l\x\x) -- (cent); 
    }
    
    \tkzDefPoints{4.8/-1/ca, 5.2/-0.6/cb, 5.3/-0.8/cc, 4.7/-0.8/cd, 4.9/-0.6/ce, 5.1/-1/cf}
    
    \draw[draw=black] (cca) -- (cd);
    \draw[draw=black, ->, shorten >= 1cm, shorten <= 1cm] (cca) -- (cd);
    \draw[draw=red!30] (ccb) -- (ce);
    \draw[draw=violet!30] (ccc) -- (cb);
    \draw[draw=green!30] (ccd) -- (cf);
    \draw[draw=yellow!30] (cce) -- (ca);
    \draw[draw=blue!30] (ccf) -- (cc);
    \draw[draw=yellow!30] (ca) -- (ccg);
    \draw[draw=violet!30] (cb) -- (ccg);
    \draw[draw=blue!30] (cc) -- (ccg);
    \draw[draw=black] (cd) -- (ccg);
    \draw[draw=black, ->, shorten >= 1cm, shorten <= 1cm] (cd) -- (ccg);
    \draw[draw=red!30] (ce) -- (ccg);
    \draw[draw=green!30] (cf) -- (ccg);
    
    \foreach \x in {a, b, c, d, e, f} {
    \filldraw (c\x) circle (1pt);
    \filldraw (cc\x) circle (1pt);
    }
    \filldraw (ccg) circle (2pt);
    \draw[draw=black] (cent) ellipse [x radius = 0.2, y radius = 0.06];
    \draw[draw=black] (5.2,8) -- (5.2,9.9);
    \draw[draw=black] (4.8,8) -- (4.8,8.4);
    \draw[draw=black] (4.8,8.8) -- (4.8,9.5);
    \draw[draw=black] (4.8,8.4) -- (2,8.4);
    \draw[draw=black] (4.8,8.8) -- (2,8.8);
    \draw[draw=black] (4.8,9.5) -- (2,9.5);
    \draw[draw=black] (5.2,9.9) -- (2,9.9);
    \draw[->] (-0.8,9.7) -- (1.9,9.7);
    \draw[->] (1.9,8.6) -- (-0.8,8.6);
    \draw[->] (-0.8,6) -- (1.9,6);
    \draw[->] (-0.8,4) -- (3.3,4);
    \draw[->] (-0.8,3) -- (4.8,3);
    \draw[->] (-0.8,-1) -- (0.8,-1);
    \tkzLabelPoint[right=0pt, yshift=0pt](-5,9.7){\huge{Light source}}
    \tkzLabelPoint[right=0pt, yshift=0pt](-5,8.6){\huge{Spectrometer}}
    \tkzLabelPoint[right=0pt, yshift=0pt](-5,6){\huge{Optical fiber}}
    \tkzLabelPoint[right=0pt, yshift=0pt](-5,4){\huge{Incident light}}
    \tkzLabelPoint[right=0pt, yshift=0pt](-5,3){\huge{Reflected and}}
    \tkzLabelPoint[right=0pt, yshift=-18pt](-5,3){\huge{transmitted light}}
    \tkzLabelPoint[right=0pt, yshift=0pt](-5,-1){\huge{Sample}}
\end{tikzpicture}
        </code>
    </pre>
    <img src="tikz/light_projection.svg" alt="light projection" class="picture-block">
</div>

<!-- block -->
<div class="code-picture-container">
    <pre class="code-block">
        <p> Cherenkov radiation</p>
        <code>
\usepackage{tkz-euclide}
...
\begin{tikzpicture}
    \tkzDefPoints{0/0/pi, 2/0/pint, 9/0/pf, 3/0/pt1, 8/0/pt2, 4.8/2.4/pt3, 4.8/-2.4/pt4}
    \draw[draw=black, -latex, thick] (pi) -- (pint);
    \draw[draw=black, -latex, thick] (pint) -- (pf);
    \draw[draw=black, thick] (pt1) -- (pt3);
    \draw[draw=black, thick] (pt3) -- (pt2);
    \draw[draw=black, thick] (pt1) -- (pt4);
    \draw[draw=black, thick] (pt4) -- (pt2);
    \tkzMarkRightAngle[draw=black,size=.4](pt1,pt3,pt2);
    \tkzMarkRightAngle[draw=black,size=.4](pt1,pt4,pt2);
    \pic [draw, -, "$\theta$", angle eccentricity=1.2, angle radius=1cm] {angle = pf--pt1--pt3};
    \tkzLabelPoint[right=1cm, yshift=-0.3cm](pi){$\frac{c}{n} < v < c$}
    \tkzLabelPoint[right=0cm, yshift=-0.3cm](0, 3){Refractive index: $n$}
    \foreach \xa in {0, 1, 2, 3, 4, 5, 6, 7, 8}{
        \def\valx{\xa*0.4}
        \def\valy{\xa*0.3}
        \tkzDefPoint(4.9+\valx,2.5-\valy){f1}
        \tkzDefPoint(5.5+\valx,3.2-\valy){f2}
        \draw[draw=black, -latex, thick] (f1) -- (f2);
        \tkzDefPoint(4.9+\valx,-2.5+\valy){f1}
        \tkzDefPoint(5.5+\valx,-3.2+\valy){f2}
        \draw[draw=black, -latex, thick] (f1) -- (f2);
    }
    \node[rotate=53.13] at (3.6,1.3) {$x = \frac{c}{n}t$};
    \node[] at (5.4,-0.3) {$h = vt = \beta c t$};
\end{tikzpicture}
        </code>
    </pre>
    <img src="tikz/cherenkov.svg" alt="Interactions in the Standard Model of particle physics" class="picture-block">
</div>

<!-- block -->
<div class="code-picture-container">
    <pre class="code-block">
        <p> Atmospheric neutrinos</p>
        <code>
\usepackage{tkz-euclide}
...
\begin{tikzpicture}
    \tkzLabelPoint[right=0.05cm, yshift=0cm](0, 4){.}

    \draw[fill=white, dashed] (0,0) -- (0,2) arc[start angle=90, end angle=270,radius=2cm] -- (0,0);
    \draw[dashed] (-1.98,-0.15) arc [start angle=180, end angle=0, x radius=1.98cm, y radius=0.5cm];
    \draw[fill=gray!30] (0,0) -- (0,2) arc[start angle=90, end angle=-90,radius=2cm] -- (0,0);
    \fill[fill=white] (0,0) ellipse (0.5cm and 2cm);
    \draw[] (1.98,-0.15) arc [start angle=0, end angle=-180, x radius=1.98cm, y radius=0.5cm];
    \draw[dashed] (0,2) arc [start angle=90, end angle=270, x radius=0.5cm, y radius=2cm];
    \draw (0,-2) arc [start angle=-90, end angle=90, x radius=0.5cm, y radius=2cm];
    \draw[dashed] (-0.5, 0.35) -- (0.5, -0.65);

    \tkzDefPoint(0, 0){z1} 
    \tkzDefPoint(0, 3){z2} 
    \tkzDefPoint(1.33,4.3){pt1} 
    \tkzDefPoint(-4, -0.9){pdt1}

    \fill[black] (0.33,1.5) circle (0.05cm);

    \tkzDefPoint(1.33,3.5){p1} 
    \tkzDefPoint(0.33+0.25,1.5+0.5){p2} 
    \draw[draw=black, ultra thick] (p1) -- (p2);

    \tkzDefPoint(-3.87, -1.5){pd1} 
    \tkzDefPoint(-2.47, -0.5){pd2} 
    \draw[draw=black, ultra thick] (pd1) -- (pd2);

    \tkzDefPoint(-1.945, -0.125){ie1} 
    \tkzDefPoint(0.33,1.5){ie2}
    \draw[draw=black, dashed] (ie1) -- (ie2);

    \draw[draw=black, dotted] (pd2) -- (-1.9, -0.2);
    \draw[draw=black, dotted] (pd2) -- (-1.8, 0.1);
    \draw[draw=black, dotted] (pd2) -- (-1.8, -0.3);
    \draw[draw=black, dotted] (pd2) -- (-1.9, 0.2);
    \draw[draw=black, dotted] (pd2) -- (-1.7, -0.2);
    \draw[draw=black, dotted] (pd2) -- (-1.7, -0.4);
    \draw[draw=black, dotted] (pd2) -- (-1.8, -0.5);
    \draw[draw=black, dotted] (pd2) -- (ie1);

    \draw[draw=black, dotted] (p2) -- (0.33,1.5);
    \draw[draw=black, dotted] (p2) -- (0.1,1.5);
    \draw[draw=black, dotted] (p2) -- (0.15,1.7);
    \draw[draw=black, dotted] (p2) -- (0.5,1.6);
    \draw[draw=black, dotted] (p2) -- (0.4,1.4);
    \draw[draw=black, dotted] (p2) -- (0.6,1.4);
    \draw[draw=black, dotted] (p2) -- (0.2,1.3);
    \draw[draw=black, dotted] (p2) -- (0.2,1.5);

    \tkzLabelPoint[right=-2.6cm, yshift=0cm](p1){\Large{Downward}}
    \tkzLabelPoint[right=0.2cm, yshift=-0.5cm](pd1){\Large{Upward}}
\end{tikzpicture}
        </code>
    </pre>
    <img src="tikz/atmos_neutrino.svg" alt="Atmospheric neutrinos" class="picture-block">
</div>

<!-- block -->
<div class="code-picture-container">
    <pre class="code-block">
        <p> Embedding</p>
        <code>
\usepackage{tkz-euclide}
\usepackage[compat=1.1.0]{tikz-feynman}
...
\begin{tikzpicture}[scale=0.8, every node/.style={transform shape}]
    \definecolor{bc}{HTML}{86ADFF}
    \definecolor{bf}{HTML}{317DE7}
    \definecolor{rc}{HTML}{FDC6BE}
    \definecolor{rf}{HTML}{C6281E}

    \tkzDefPoints{0/0/ip1, 2/0/e1, 0.5/1/t1, 0.5/2.2/nu1, 1/2.1/p1, 1.6/1.9/p2, 1.8/1.5/p3, -2/0/e2, -0.5/-1/t2, -0.8/-2/nu2, -1.5/-1.8/m2, -1/-1.8/c1}

    \def\valx{-2}
    \def\valy{2}

    \tkzDefPoint(-0.5+\valx,-1+\valy){t2_1}
    \tkzDefPoint(-0.8+\valx,-2+\valy){nu2_1}
    \tkzDefPoint(-1.5+\valx,-1.8+\valy){m2_1}
    \tkzDefPoint(-1+\valx,-1.8+\valy){c1_1}

    \filldraw[color=gray!80, fill=gray!10, very thick](c1) circle (0.98);
    \filldraw[color=rf!80, fill=rc!20, very thick](c1_1) circle (0.98);
    \draw[thick, -latex] (-2.1,-0.3) arc (110:-20:0.5);
    \draw[thick, -latex] (-2,-1.4) arc (290:150:0.5);

    \draw[draw=black, -latex, thick] (ip1) -- (t1);
    \draw[draw=black, -latex, dashed, thick] (t1) -- (nu1);
    \draw[draw=black, -latex, thick] (t1) -- (p1);
    \draw[draw=black, -latex, thick] (t1) -- (p2);
    \draw[draw=black, -latex, thick] (t1) -- (p3);
    \draw[draw=black, -latex, thick] (ip1) -- (t2);
    \draw[draw=black, -latex, dashed, thick] (t2) -- (nu2);
    \path [draw=black, -latex, thick] (t2) -- (m2);

    \draw[draw=black, -latex, dashed, thick] (t2_1) -- (nu2_1);
    \path [draw=black, -latex, thick] (t2_1) -- (m2_1);

    \node at (ip1) [circle,fill,fill=yellow!30,inner sep=3pt]{};
    \node at (ip1) [star,star points=10,fill=gray,inner sep=1.5pt] {};

    \tkzLabelPoint[right=-0.2cm, yshift=-0.4cm](t1){$\tau^+$}
    \tkzLabelPoint[right=-0.3cm, yshift=0.2cm](nu1){$\bar{\nu}_\tau$}
    \tkzLabelPoint[right=0cm, yshift=0.1cm](p1){$h^+$}%$\pi^+$}
    \tkzLabelPoint[right=0cm, yshift=0.1cm](p2){$h^-$}%$\pi^-$}
    \tkzLabelPoint[right=0cm, yshift=0cm](p3){$h^+$}%$\pi^+$}
    \tkzLabelPoint[right=-0.4cm, yshift=0.5cm](t2){$\tau^-$}
    \tkzLabelPoint[right=-0.2cm, yshift=-0.2cm](nu2){$\nu_\tau$}
    \tkzLabelPoint[right=-0.5cm, yshift=-0.2cm](m2){$K/\pi$}
    \tkzLabelPoint[right=-0.2cm, yshift=-0.2cm](nu2_1){$\nu_\tau$}
    \tkzLabelPoint[right=-0.5cm, yshift=-0.2cm](m2_1){$K$}
    \tkzLabelPoint[right=-0.5cm, yshift=1.3cm](c1_1){MC}
    \tkzLabelPoint[right=-1cm, yshift=-1.3cm](c1){data / MC}
    \tkzLabelPoint[right=0cm, yshift=-2cm](ip1){signal}
    \tkzLabelPoint[right=-0.5cm, yshift=2cm](ip1){tag}
\end{tikzpicture}
\begin{tikzpicture}[scale=0.8, every node/.style={transform shape}]
    \definecolor{bc}{HTML}{86ADFF}
    \definecolor{bf}{HTML}{317DE7}
    \definecolor{rc}{HTML}{FDC6BE}
    \definecolor{rf}{HTML}{C6281E}

    \tkzDefPoints{0/0/ip1, 2/0/e1, 0.5/1/t1, 0.5/2.2/nu1, 1/2.1/p1, 1.6/1.9/p2, 1.8/1.5/p3, -2/0/e2, -0.5/-1/t2, -0.8/-2/nu2, -1.5/-1.8/m2, -1/-1.8/c1}

    \def\valx{-2}
    \def\valy{2}

    \tkzDefPoint(-0.5+\valx,-1+\valy){t2_1}
    \tkzDefPoint(-0.8+\valx,-2+\valy){nu2_1}
    \tkzDefPoint(-1.5+\valx,-1.8+\valy){m2_1}
    \tkzDefPoint(-1+\valx,-1.8+\valy){c1_1}

    \filldraw[color=gray!80, fill=gray!10, very thick](c1) circle (0.98);
    \filldraw[color=bf!80, fill=bc!20, very thick](c1_1) circle (0.98);
    \draw[thick, -latex] (-2.1,-0.3) arc (110:-20:0.5);
    \draw[thick, -latex] (-2,-1.4) arc (290:150:0.5);

    \draw[draw=black, -latex, thick] (ip1) -- (t1);
    \draw[draw=black, -latex, dashed, thick] (t1) -- (nu1);
    \draw[draw=black, -latex, thick] (t1) -- (p1);
    \draw[draw=black, -latex, thick] (t1) -- (p2);
    \draw[draw=black, -latex, thick] (t1) -- (p3);
    \draw[draw=black, -latex, thick] (ip1) -- (t2);
    \draw[draw=black, -latex, dashed, thick] (t2) -- (nu2);
    \path [draw=black, -latex, thick] (t2) -- (m2);

    \draw[draw=black, -latex, dashed, thick] (t2_1) -- (nu2_1);
    \path [draw=black, -latex, thick] (t2_1) -- (m2_1);

    \node at (ip1) [circle,fill,fill=yellow!30,inner sep=3pt]{};
    \node at (ip1) [star,star points=10,fill=gray,inner sep=1.5pt] {};

    \tkzLabelPoint[right=-0.2cm, yshift=-0.4cm](t1){$\tau^+$}
    \tkzLabelPoint[right=-0.3cm, yshift=0.2cm](nu1){$\bar{\nu}_\tau$}
    \tkzLabelPoint[right=0cm, yshift=0.1cm](p1){$h^+$}%$\pi^+$}
    \tkzLabelPoint[right=0cm, yshift=0.1cm](p2){$h^-$}%$\pi^-$}
    \tkzLabelPoint[right=0cm, yshift=0cm](p3){$h^+$}%$\pi^+$}
    \tkzLabelPoint[right=-0.4cm, yshift=0.5cm](t2){$\tau^-$}
    \tkzLabelPoint[right=-0.2cm, yshift=-0.2cm](nu2){$\nu_\tau$}
    \tkzLabelPoint[right=-0.5cm, yshift=-0.2cm](m2){$K/\pi$}
    \tkzLabelPoint[right=-0.2cm, yshift=-0.2cm](nu2_1){$\nu_\tau$}
    \tkzLabelPoint[right=-0.5cm, yshift=-0.2cm](m2_1){$\pi$}
    \tkzLabelPoint[right=-0.5cm, yshift=1.3cm](c1_1){MC}
    \tkzLabelPoint[right=-1cm, yshift=-1.3cm](c1){data / MC}
    \tkzLabelPoint[right=0cm, yshift=-2cm](ip1){signal}
    \tkzLabelPoint[right=-0.5cm, yshift=2cm](ip1){tag}
\end{tikzpicture}
        </code>
    </pre>
    <img src="tikz/embedding.svg" alt="Embedding scheme" class="picture-block">
</div>

<!-- block -->
<div class="code-picture-container">
    <pre class="code-block">
        <p> Boosted Decision Tree</p>
        <code>
\usepackage{tkz-euclide}
...
\begin{tikzpicture}[scale=0.4, every node/.style={transform shape}]
    \tkzDefPoints{-2/0/a, 2/0/b, 2/2/c, -2/2/d, 0/1/e}
    \fill[fill=yellow!20] (a) -- (b) -- (c) -- (d) -- (a);
    \draw[draw=black] (a) -- (b) -- (c) -- (d) -- (a);
    \tkzLabelPoint[right=-1.4cm, yshift=0cm](e){\huge{Node 1}}
    \tkzDefPoints{0/0/f, -6/-2/g, 6/-2/h}
    \draw[draw=gray!50] (f) -- (g);
    \draw[draw=black] (f) -- (h);
    \tkzDefPoint(-4,-0.5){i}
    \tkzDefPoint(5,-0.5){j}
    %\tkzLabelPoint[right=-1.2cm, yshift=0cm](i){\contour{black}{\textcolor{orange!50}{\huge{no}}}}
    %\tkzLabelPoint[right=-1.2cm, yshift=0cm](j){\contour{black}{\textcolor{green!50}{\huge{yes}}}}
    \tkzLabelPoint[right=-1.2cm, yshift=0cm](i){\textcolor{gray!50}{\huge{no}}}
    \tkzLabelPoint[right=-1.2cm, yshift=0cm](j){\textcolor{black}{\huge{yes}}}

    \tkzDefPoints{-8/-4/a, -4/-4/b, -4/-2/c, -8/-2/d, -6/-3/e}
    \fill[fill=yellow!20] (a) -- (b) -- (c) -- (d) -- (a);
    \draw[draw=black] (a) -- (b) -- (c) -- (d) -- (a);
    \tkzLabelPoint[right=-1.4cm, yshift=0cm](e){\huge{Node 2}}
    \tkzDefPoints{-6/-4/f, -12/-6/g, 0/-6/h}
    \draw[draw=gray!50] (f) -- (g);
    \draw[draw=black] (f) -- (h);
    \tkzDefPoint(-10,-4.5){i}
    \tkzDefPoint(-1,-4.5){j}
    %\tkzLabelPoint[right=-1.2cm, yshift=0cm](i){\contour{black}{\textcolor{orange!50}{\huge{no}}}}
    %\tkzLabelPoint[right=-1.2cm, yshift=0cm](j){\contour{black}{\textcolor{green!50}{\huge{yes}}}}
    \tkzLabelPoint[right=-1.2cm, yshift=0cm](i){\textcolor{gray!50}{\huge{no}}}
    \tkzLabelPoint[right=-1.2cm, yshift=0cm](j){\textcolor{black}{\huge{yes}}}


    %\node[text=cyan!30] at (\x+1.3,\y+2.2) {\contour{black}{Monte Carlo}};


    \tkzDefPoints{-2/-8/a, 2/-8/b, 2/-6/c, -2/-6/d, 0/-7/e}
    \fill[fill=yellow!20] (a) -- (b) -- (c) -- (d) -- (a);
    \draw[draw=black] (a) -- (b) -- (c) -- (d) -- (a);
    \tkzLabelPoint[right=-1.4cm, yshift=0cm](e){\huge{Node 3}}
    \tkzDefPoints{0/-8/f, -6/-10/g, 6/-10/h}
    \draw[draw=gray!50] (f) -- (g);
    \draw[draw=black] (f) -- (h);
    \tkzDefPoint(-4,-8.5){i}
    \tkzDefPoint(5,-8.5){j}
    %\tkzLabelPoint[right=-1.2cm, yshift=0cm](i){\contour{black}{\textcolor{orange!50}{\huge{no}}}}
    %\tkzLabelPoint[right=-1.2cm, yshift=0cm](j){\contour{black}{\textcolor{green!50}{\huge{yes}}}}
    \tkzLabelPoint[right=-1.2cm, yshift=0cm](i){\textcolor{gray!50}{\huge{no}}}
    \tkzLabelPoint[right=-1.2cm, yshift=0cm](j){\textcolor{black}{\huge{yes}}}


    \draw[rounded corners=0.4cm, fill=orange!30] (6-2,-2-2) rectangle ++(4,2) node [midway] {};
    \draw[rounded corners=0.4cm, fill=orange!30] (-12-2,-6-2) rectangle ++(4,2) node [midway] {};
    \draw[rounded corners=0.4cm, fill=orange!30] (-6-2,-10-2) rectangle ++(4,2) node [midway] {};
    \draw[rounded corners=0.4cm, fill=orange!30] (6-2,-10-2) rectangle ++(4,2) node [midway] {};

    \tkzLabelPoint[right=-1.2cm, yshift=-1cm](6,-2){\huge{Leaf 1}}
    \tkzLabelPoint[right=-1.2cm, yshift=-1cm](-12,-6){\huge{Leaf 2}}
    \tkzLabelPoint[right=-1.2cm, yshift=-1cm](-6,-10){\huge{Leaf 3}}
    \tkzLabelPoint[right=-1.2cm, yshift=-1cm](6,-10){\huge{Leaf 4}}

\end{tikzpicture}
        </code>
    </pre>
    <img src="tikz/bdt.svg" alt="boosted decision tree" class="picture-block">
</div>

<!-- block -->
<div class="code-picture-container">
    <pre class="code-block">
        <p> Overtraining</p>
        <code>
\usepackage{tkz-euclide}
...
\begin{tikzpicture}[scale=0.55, every node/.style={transform shape}]
    \tkzDefPoint(1.36, 5.76){pb0}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb0) circle (5pt);
    \tkzDefPoint(1.55, 2.60){pb1}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb1) circle (5pt);
    \tkzDefPoint(0.84, 5.25){pb2}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb2) circle (5pt);
    \tkzDefPoint(0.60, 0.44){pb3}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb3) circle (5pt);
    \tkzDefPoint(1.84, 6.87){pb4}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb4) circle (5pt);
    \tkzDefPoint(1.55, 4.12){pb5}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb5) circle (5pt);
    \tkzDefPoint(1.79, 3.88){pb6}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb6) circle (5pt);
    \tkzDefPoint(1.06, 9.69){pb7}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb7) circle (5pt);
    \tkzDefPoint(0.14, 1.59){pb8}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb8) circle (5pt);
    \tkzDefPoint(1.75, 3.63){pb9}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb9) circle (5pt);
    \tkzDefPoint(1.94, 7.74){pb10}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb10) circle (5pt);
    \tkzDefPoint(0.32, 5.26){pb11}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb11) circle (5pt);
    \tkzDefPoint(1.78, 7.57){pb12}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb12) circle (5pt);
    \tkzDefPoint(0.57, 6.26){pb13}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb13) circle (5pt);
    \tkzDefPoint(0.02, 0.67){pb14}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb14) circle (5pt);
    \tkzDefPoint(1.05, 8.01){pb15}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb15) circle (5pt);
    \tkzDefPoint(1.29, 1.92){pb16}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb16) circle (5pt);
    \tkzDefPoint(0.25, 1.30){pb17}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb17) circle (5pt);
    \tkzDefPoint(1.43, 5.98){pb18}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb18) circle (5pt);
    \tkzDefPoint(0.49, 3.13){pb19}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb19) circle (5pt);
    \tkzDefPoint(3.65, 2.74){pb20}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb20) circle (5pt);
    \tkzDefPoint(8.17, 1.67){pb21}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb21) circle (5pt);
    \tkzDefPoint(2.96, 2.26){pb22}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb22) circle (5pt);
    \tkzDefPoint(8.80, 1.35){pb23}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb23) circle (5pt);
    \tkzDefPoint(3.38, 0.82){pb24}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb24) circle (5pt);
    \tkzDefPoint(9.96, 0.69){pb25}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb25) circle (5pt);
    \tkzDefPoint(7.27, 2.30){pb26}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb26) circle (5pt);
    \tkzDefPoint(0.70, 0.65){pb27}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb27) circle (5pt);
    \tkzDefPoint(3.38, 0.80){pb28}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb28) circle (5pt);
    \tkzDefPoint(5.91, 2.52){pb29}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb29) circle (5pt);
    \tkzDefPoint(5.05, 1.34){pb30}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb30) circle (5pt);
    \tkzDefPoint(1.60, 0.54){pb31}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb31) circle (5pt);
    \tkzDefPoint(2.25, 0.78){pb32}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb32) circle (5pt);
    \tkzDefPoint(1.41, 2.88){pb33}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb33) circle (5pt);
    \tkzDefPoint(9.56, 2.28){pb34}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb34) circle (5pt);
    \tkzDefPoint(8.90, 0.99){pb35}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb35) circle (5pt);
    \tkzDefPoint(4.55, 2.21){pb36}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb36) circle (5pt);
    \tkzDefPoint(0.39, 0.54){pb37}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb37) circle (5pt);
    \tkzDefPoint(5.42, 0.11){pb38}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb38) circle (5pt);
    \tkzDefPoint(4.08, 0.48){pb39}
    \filldraw[fill=cyan!50, draw=cyan!50] (pb39) circle (5pt);
    \tkzDefPoint(2.45, 9.31){pr0}
    \filldraw[fill=red!50, draw=red!50] (pr0) circle (5pt);
    \tkzDefPoint(2.43, 7.89){pr1}
    \filldraw[fill=red!50, draw=red!50] (pr1) circle (5pt);
    \tkzDefPoint(4.66, 6.73){pr2}
    \filldraw[fill=red!50, draw=red!50] (pr2) circle (5pt);
    \tkzDefPoint(2.78, 3.69){pr3}
    \filldraw[fill=red!50, draw=red!50] (pr3) circle (5pt);
    \tkzDefPoint(4.76, 3.98){pr4}
    \filldraw[fill=red!50, draw=red!50] (pr4) circle (5pt);
    \tkzDefPoint(4.77, 3.73){pr5}
    \filldraw[fill=red!50, draw=red!50] (pr5) circle (5pt);
    \tkzDefPoint(2.13, 9.62){pr6}
    \filldraw[fill=red!50, draw=red!50] (pr6) circle (5pt);
    \tkzDefPoint(3.22, 9.75){pr7}
    \filldraw[fill=red!50, draw=red!50] (pr7) circle (5pt);
    \tkzDefPoint(2.78, 7.92){pr8}
    \filldraw[fill=red!50, draw=red!50] (pr8) circle (5pt);
    \tkzDefPoint(3.93, 6.35){pr9}
    \filldraw[fill=red!50, draw=red!50] (pr9) circle (5pt);
    \tkzDefPoint(3.46, 3.50){pr10}
    \filldraw[fill=red!50, draw=red!50] (pr10) circle (5pt);
    \tkzDefPoint(3.04, 4.27){pr11}
    \filldraw[fill=red!50, draw=red!50] (pr11) circle (5pt);
    \tkzDefPoint(2.18, 9.26){pr12}
    \filldraw[fill=red!50, draw=red!50] (pr12) circle (5pt);
    \tkzDefPoint(3.07, 9.33){pr13}
    \filldraw[fill=red!50, draw=red!50] (pr13) circle (5pt);
    \tkzDefPoint(4.33, 4.92){pr14}
    \filldraw[fill=red!50, draw=red!50] (pr14) circle (5pt);
    \tkzDefPoint(3.18, 5.02){pr15}
    \filldraw[fill=red!50, draw=red!50] (pr15) circle (5pt);
    \tkzDefPoint(4.91, 9.16){pr16}
    \filldraw[fill=red!50, draw=red!50] (pr16) circle (5pt);
    \tkzDefPoint(2.45, 6.21){pr17}
    \filldraw[fill=red!50, draw=red!50] (pr17) circle (5pt);
    \tkzDefPoint(4.87, 6.67){pr18}
    \filldraw[fill=red!50, draw=red!50] (pr18) circle (5pt);
    \tkzDefPoint(4.92, 5.29){pr19}
    \filldraw[fill=red!50, draw=red!50] (pr19) circle (5pt);
    \tkzDefPoint(9.15, 5.30){pr20}
    \filldraw[fill=red!50, draw=red!50] (pr20) circle (5pt);
    \tkzDefPoint(4.05, 5.50){pr21}
    \filldraw[fill=red!50, draw=red!50] (pr21) circle (5pt);
    \tkzDefPoint(2.16, 4.55){pr22}
    \filldraw[fill=red!50, draw=red!50] (pr22) circle (5pt);
    \tkzDefPoint(4.87, 5.73){pr23}
    \filldraw[fill=red!50, draw=red!50] (pr23) circle (5pt);
    \tkzDefPoint(5.79, 4.97){pr24}
    \filldraw[fill=red!50, draw=red!50] (pr24) circle (5pt);
    \tkzDefPoint(9.72, 5.61){pr25}
    \filldraw[fill=red!50, draw=red!50] (pr25) circle (5pt);
    \tkzDefPoint(8.74, 4.84){pr26}
    \filldraw[fill=red!50, draw=red!50] (pr26) circle (5pt);
    \tkzDefPoint(4.98, 3.78){pr27}
    \filldraw[fill=red!50, draw=red!50] (pr27) circle (5pt);
    \tkzDefPoint(8.72, 5.58){pr28}
    \filldraw[fill=red!50, draw=red!50] (pr28) circle (5pt);
    \tkzDefPoint(2.98, 4.03){pr29}
    \filldraw[fill=red!50, draw=red!50] (pr29) circle (5pt);
    \tkzDefPoint(7.11, 5.28){pr30}
    \filldraw[fill=red!50, draw=red!50] (pr30) circle (5pt);
    \tkzDefPoint(6.20, 4.36){pr31}
    \filldraw[fill=red!50, draw=red!50] (pr31) circle (5pt);
    \tkzDefPoint(5.69, 3.66){pr32}
    \filldraw[fill=red!50, draw=red!50] (pr32) circle (5pt);
    \tkzDefPoint(8.07, 4.44){pr33}
    \filldraw[fill=red!50, draw=red!50] (pr33) circle (5pt);
    \tkzDefPoint(5.99, 3.49){pr34}
    \filldraw[fill=red!50, draw=red!50] (pr34) circle (5pt);
    \tkzDefPoint(2.33, 3.61){pr35}
    \filldraw[fill=red!50, draw=red!50] (pr35) circle (5pt);
    \tkzDefPoint(7.30, 3.80){pr36}
    \filldraw[fill=red!50, draw=red!50] (pr36) circle (5pt);
    \tkzDefPoint(9.03, 5.58){pr37}
    \filldraw[fill=red!50, draw=red!50] (pr37) circle (5pt);
    \tkzDefPoint(4.98, 3.83){pr38}
    \filldraw[fill=red!50, draw=red!50] (pr38) circle (5pt);
    \tkzDefPoint(8.77, 3.04){pr39}
    \filldraw[fill=red!50, draw=red!50] (pr39) circle (5pt);

    \tkzDefPoint(7.5, 1){prplus1}
    \filldraw[fill=red!50, draw=red!50] (prplus1) circle (5pt);

    \tkzDefPoint(4, 8){pbplus1}
    \filldraw[fill=cyan!50, draw=cyan!50] (pbplus1) circle (5pt);

    \draw [black, line width=0.6mm] plot [smooth, tension=1] coordinates {(2.5,10) (3,3) (10,3.5)};

    \draw [gray!50, line width=0.6mm] plot [smooth, tension=0.5] coordinates {(2.4,10) (1.5, 9) (4.2, 8.2) (4.2, 7.6) (2,8) (2.1,6) (2.2,3) (3,2.8) (5, 3.2) (6.5, 2.6) (7, 1.2) (7.2, 0.6) (8, 0.8) (7.8, 1.5) (6.9, 2.3) (7, 2.8) (8.5, 2.5) (10,3)};

    %\draw[draw=black] (-0.5,-0.5) -- (-0.5,10.5) -- (10.5,10.5) -- (10.5,-0.5) -- (-0.5,-0.5);

    \draw[draw=black, line width=0.5mm] (6,9) -- (7,9);
    \tkzLabelPoint[right=0.2cm, yshift=0cm](7,9){\huge{Fit 1}}
    \draw[draw=gray!50, line width=0.5mm] (6,8) -- (7,8);
    \tkzLabelPoint[right=0.2cm, yshift=0cm](7,8){\huge{Fit 2}}
\end{tikzpicture} 
        </code>
    </pre>
    <img src="tikz/overtraining.svg" alt="Overtraining" class="picture-block">
</div>

<!-- block -->
<div class="code-picture-container">
    <pre class="code-block">
        <p> ROC curve</p>
        <code>
\usepackage{tkz-euclide}
\usepackage{pgfplots}
\usepgfplotslibrary{fillbetween}
\pgfplotsset{ticks=none}
...
\begin{tikzpicture}[scale=1, every node/.style={transform shape}]
    \begin{axis}[axis x line=center, axis line style = thick, xlabel={FPR}, xlabel style={below right}, xmin=-1, xmax=12,
        axis y line=center, axis line style = thick, ylabel={TPR}, ylabel style={above left}, ymin=-1,ymax=12]

        \addplot+[name path=f,color=black,mark=none,samples=200,domain=0:10,smooth,thick] {(100*x)^(1/3)} node[above,yshift=0.5cm,pos=0.5,color=black] {ROC};

        \addplot+[color=black,mark=none,samples=200,domain=0:10,smooth,thick,dashed] {x} node[below,yshift=-2cm,pos=0.8,color=black] {AUC};

        \addplot+[color=black,mark=none,smooth,thick] coordinates {(10, 0) (10, 10)};
        
        \addplot+[color=black,mark=none,smooth,thick,samples=200,domain=0:10] {10};
        
        \path[name path=axis] (axis cs:0,0) -- (axis cs:10,0);
        
        \addplot [thick, color=green, fill=green, fill opacity=0.2]
        fill between[of=f and axis, soft clip={domain=0:10},];
        
        \addplot+[color=black,mark=none,smooth,thick] coordinates {(10, 0) (10, 0)} node[below,yshift=0cm,pos=0.8,color=black] {1};
        
        \addplot+[color=black,mark=none,smooth,thick] coordinates {(-0.5, 0) (-0.5, 0)} node[below,yshift=0cm,pos=0.8,color=black] {0};
        
        \addplot+[color=black,mark=none,smooth,thick] coordinates {(-0.5, 10) (-0.5, 10)} node[below,yshift=0.25cm,pos=0.8,color=black] {1};
        
    \end{axis}
\end{tikzpicture} 
        </code>
    </pre>
    <img src="tikz/roccurve.svg" alt="ROC curve" class="picture-block">
</div>

<!-- block -->
<div class="code-picture-container">
    <pre class="code-block">
        <p> Standard Model</p>
        <code>
\usepackage{tkz-euclide}
...
\begin{tikzpicture}[node distance=2cm, font=\small]
    \def\ll{1.9}
    \def\bb{6.4}

    %%%%% quarks
    \def\x{0}
    \def\y{0}
    \draw[rounded corners=8pt, draw=black, fill=cyan!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $u$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize up}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 2.3 MeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize 2/3}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1/2}};

    \def\x{\ll}
    \def\y{0}
    \draw[rounded corners=8pt, draw=black, fill=cyan!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $c$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize charm}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 1.27 GeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize 2/3}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1/2}};

    \def\x{2*\ll}
    \def\y{0}
    \draw[rounded corners=8pt, draw=black, fill=cyan!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $t$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize top}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 173.1 GeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize 2/3}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1/2}};

    \def\x{0}
    \def\y{-\ll}
    \draw[rounded corners=8pt, draw=black, fill=cyan!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $d$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize down}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 4.8 MeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize -1/3}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1/2}};

    \def\x{\ll}
    \def\y{-\ll}
    \draw[rounded corners=8pt, draw=black, fill=cyan!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $s$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize strange}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 95 MeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize -1/3}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1/2}};

    \def\x{2*\ll}
    \def\y{-\ll}
    \draw[rounded corners=8pt, draw=black, fill=cyan!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $b$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize bottom}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 4.2 GeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize -1/3}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1/2}};

    %%%%%%%%%%%%%%%%%%%% leptons

    \def\x{0}
    \def\y{-2*\ll}
    \draw[rounded corners=8pt, draw=black, fill=green!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $e$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize electron}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 0.511 MeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize 2/3}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1/2}};

    \def\x{\ll}
    \def\y{-2*\ll}
    \draw[rounded corners=8pt, draw=black, fill=green!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.68) {{\Huge $\mu$}}; % make it a bit lower
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize muon}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 105.7 MeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize -1}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1/2}};

    \def\x{2*\ll}
    \def\y{-2*\ll}
    \draw[rounded corners=8pt, draw=black, fill=green!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $\tau$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize tau}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 1.78 GeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize -1}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1/2}};

    \def\x{0}
    \def\y{-3*\ll}
    \draw[rounded corners=8pt, draw=black, fill=green!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $\nu_e$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize $e$ neutrino}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize &lt;2.2 eV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize 0}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1/2}};

    \def\x{\ll}
    \def\y{-3*\ll}
    \draw[rounded corners=8pt, draw=black, fill=green!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.7) {{\Huge $\nu_\mu$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize $\mu$ neutrino}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize &lt;0.17 MeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize 0}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1/2}};

    \def\x{2*\ll}
    \def\y{-3*\ll}
    \draw[rounded corners=8pt, draw=black, fill=green!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $\nu_\tau$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize $\tau$ neutrino}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize &lt;15.5 MeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize 0}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1/2}};

    %%% bosons

    \def\x{\bb}
    \def\y{0}
    \draw[rounded corners=8pt, draw=black, fill=orange!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $g$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize gluon}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 0 eV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize 0}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1}};

    \def\x{\bb}
    \def\y{-\ll}
    \draw[rounded corners=8pt, draw=black, fill=orange!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $\gamma$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize photon}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 0 eV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize 0}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1}};

    \def\x{\bb}
    \def\y{-2*\ll}
    \draw[rounded corners=8pt, draw=black, fill=orange!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $W$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize $W$ boson}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 80.4 GeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize $\pm$1}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1}};

    \def\x{\bb}
    \def\y{-3*\ll}
    \draw[rounded corners=8pt, draw=black, fill=orange!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $Z$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize $Z$ boson}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 91.2 GeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize 0}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 1}};

    \def\x{\bb+\ll}
    \def\y{0}
    \draw[rounded corners=8pt, draw=black, fill=yellow!20] (\x,\y) rectangle (\x+1.5,\y+1.5) ;
    \node[text=black] at (\x+0.5,\y+0.75) {{\Huge $H$}};
    \node[text=black] at (\x+0.75,\y+0.2) {{\scriptsize Higgs boson}};
    \node[text=black] at (\x+0.75,\y+1.3) {{\scriptsize 126 GeV}};
    \node[text=black] at (\x+1.25,\y+1) {{\scriptsize 0}};
    \node[text=black] at (\x+1.25,\y+0.6) {{\scriptsize 0}};

    %%%% shape for forces
    % gluon
    \draw [rounded corners=8pt, draw=blue!80, thick] (-0.1,0)|-node{ }(3.8,1.6);
    \draw [rounded corners=8pt, draw=blue!80, thick] (8.0,0.8)|-node{ }(3.8,1.6);
    \draw [rounded corners=8pt, draw=blue!80, thick] (8.0,0.8)|-node{ }(6.8, -0.1);
    \draw [rounded corners=8pt, draw=blue!80, thick] (5.4, -1.3)|-node{ }(6.8, -0.1);
    \draw [rounded corners=8pt, draw=blue!80, thick] (5.4, -1.3)|-node{ }(3.6, -2);
    \draw [rounded corners=8pt, draw=blue!80, thick] (-0.1,0)|-node{ }(3.6, -2);

    % gamma
    \draw [rounded corners=8pt, draw=red!60, thick] (-0.2,0)|-node{ }(3.8,1.7);
    \draw [rounded corners=8pt, draw=red!60, thick] (5.5, 0.4)|-node{ }(3.8,1.7);
    \draw [rounded corners=8pt, draw=red!60, thick] (5.5, 0.4)|-node{ }(6.8,-0.3);
    \draw [rounded corners=8pt, draw=red!60, thick] (8.0, -1)|-node{ }(6.8,-0.3);
    \draw [rounded corners=8pt, draw=red!60, thick] (8.0, -1)|-node{ }(6.8,-2.0);
    \draw [rounded corners=8pt, draw=red!60, thick] (5.5, -3)|-node{ }(6.8,-2.0);
    \draw [rounded corners=8pt, draw=red!60, thick] (5.5, -3)|-node{ }(2,-3.9);
    \draw [rounded corners=8pt, draw=red!60, thick] (-0.2,0)|-node{ }(2,-3.9);

    % wz
    \draw [rounded corners=8pt, draw=teal!80, thick] (-0.3,0)|-node{ }(3.8,1.8);
    \draw [rounded corners=8pt, draw=teal!80, thick] (5.6, -1)|-node{ }(3.8,1.8);
    \draw [rounded corners=8pt, draw=teal!80, thick] (5.6, -1)|-node{ }(6.8,-2.2);
    \draw [rounded corners=8pt, draw=teal!80, thick] (8.0, -2.6)|-node{ }(6.8,-2.2);
    \draw [rounded corners=8pt, draw=teal!80, thick] (8.0, -2.6)|-node{ }(6.8,-5.8);
    \draw [rounded corners=8pt, draw=teal!80, thick] (-0.3,0)|-node{ }(6.8,-5.8);


\end{tikzpicture}
        </code>
    </pre>
    <img src="tikz/sm.svg" alt="Standard Model of particle physics" class="picture-block">
</div>

<!-- block -->
<div class="code-picture-container">
    <pre class="code-block">
        <p> Standard Model interations</p>
        <code>
\usepackage{tkz-euclide}
...
\begin{tikzpicture}[node distance=2cm]
    \def\sq{1.2}
    \def\bb{5}
    \def\ldqlv{-1}
    \def\llqlv{2}
    \def\llb{2}

    % self interactions
    % H
    \draw [draw=black, thick] plot [smooth cycle] coordinates {(2*\bb+0.5*\sq+0.3*\sq,\ldqlv-1*\llqlv+0.5*\sq) 
    (2*\bb+\sq+0.3*\sq,\ldqlv-1*\llqlv+0.7*\sq) 
    (2*\bb+1.5*\sq,\ldqlv-1*\llqlv+0.5*\sq) 
    (2*\bb+\sq+0.3*\sq,\ldqlv-1*\llqlv+0.3*\sq) 
    (2*\bb+0.5*\sq+0.3*\sq,\ldqlv-1*\llqlv+0.5*\sq)};
    % g
    \draw [draw=black, thick] plot [smooth cycle] coordinates {(\bb+0.5*\sq+0.3*\sq,+0.5*\sq) 
    (\bb+\sq+0.3*\sq,+0.7*\sq) 
    (\bb+1.5*\sq,+0.5*\sq) 
    (\bb+\sq+0.3*\sq,+0.3*\sq) 
    (\bb+0.5*\sq+0.3*\sq,+0.5*\sq)};

    % W
    \draw [draw=black, thick] plot [smooth cycle] coordinates {(\bb+0.5*\sq+0.3*\sq,-2*\llqlv+0.5*\sq-0.2*\sq) 
    (\bb+\sq+0.3*\sq,-2*\llqlv+0.7*\sq-0.2*\sq) 
    (\bb+1.5*\sq,-2*\llqlv+0.5*\sq-0.2*\sq) 
    (\bb+\sq+0.3*\sq,-2*\llqlv+0.3*\sq-0.2*\sq) 
    (\bb+0.5*\sq+0.3*\sq,-2*\llqlv+0.5*\sq-0.2*\sq)};

    % other interactions
    % q
    \draw [draw=black, thick] (0.5,-0.5) to [bend left=15] (5.5,0.7);
    \draw [draw=black, thick] (0.5,-0.5) to [bend left=20] (10.5,-2.5);
    \draw [draw=black, thick] (0.5,-0.5) to [bend left=5] (5.5,-1.5);
    \draw [draw=black, thick] (0.5,-0.5) to [bend left=5] (5.5,-3.5);
    \draw [draw=black, thick] (0.5,-0.5) to [bend left=5] (5.5,-5.5);
    % l
    \draw [draw=black, thick] (0.5,-2.1) to [bend left=15] (5.5,-1.6);
    \draw [draw=black, thick] (0.5,-2.2) to [bend right=2] (10.5,-2.5);
    \draw [draw=black, thick] (0.5,-2.1) to [bend right=10] (5.5,-3.4);
    \draw [draw=black, thick] (0.5,-2.1) to [bend right=15] (5.5,-5.5);
    \draw [draw=black, thick] (0.5,-2.1) to [bend right=15] (0.5,-4.5);
    % v
    \draw [draw=black, thick] (0.5,-4.5) to [bend left=10] (5.5,-3.6);
    \draw [draw=black, thick] (0.5,-4.5) to [bend right=15] (5.5,-5.5);
    % gam
    %\draw [draw=black, thick] (5.5,-1.5) to [bend left=10] (5.5,-3);
    % gam+W
    \draw [draw=black, thick] (5.5,-1.5) to [bend left=10] (5.5,-5.5);
    % W
    %\draw [draw=black, thick] (5.5,-3.5) to [bend left=10] (5.5,-5.5);
    \draw [draw=black, thick] (5.5,-3.2) to [bend right=5] (10.5,-2.7);
    % H
    \draw [draw=black, thick] (5.5,-5.5) to [bend right=30] (10.7,-2.7);

    %%%%% quarks
    \def\x{0}
    \def\y{\ldqlv}
    \draw[rounded corners=8pt, draw=black, fill=cyan!20] (\x,\y) rectangle (\x+\sq,\y+\sq);
    \node[text=black] at (\x+\sq/2,\y+\sq/2) {{\Large $q$}};

    %%%%%%%%%%%%%%%%%%%% leptons
    \def\x{0}
    \def\y{\ldqlv-1*\llqlv}
    \draw[rounded corners=8pt, draw=black, fill=green!20] (\x,\y) rectangle (\x+\sq,\y+\sq) ;
    \node[text=black] at (\x+\sq/2,\y+\sq/2) {{\Large $\ell$}};


    \def\x{0}
    \def\y{\ldqlv-2*\llqlv}
    \draw[rounded corners=8pt, draw=black, fill=green!20] (\x,\y) rectangle (\x+\sq,\y+\sq) ;
    \node[text=black] at (\x+\sq/2,\y+\sq/2) {{\Large $\nu$}};

    %%% bosons
    \def\x{\bb}
    \def\y{0}
    \draw[rounded corners=8pt, draw=black, fill=orange!20] (\x,\y) rectangle (\x+\sq,\y+\sq) ;
    \node[text=black] at (\x+\sq/2,\y+\sq/2) {{\Large $g$}};

    \def\x{\bb}
    \def\y{-\llb}
    \draw[rounded corners=8pt, draw=black, fill=orange!20] (\x,\y) rectangle (\x+\sq,\y+\sq) ;
    \node[text=black] at (\x+\sq/2,\y+\sq/2) {{\Large $\gamma$}};

    \def\x{\bb}
    \def\y{-2*\llb}
    \draw[rounded corners=8pt, draw=black, fill=orange!20] (\x,\y) rectangle (\x+\sq,\y+\sq) ;
    \node[text=black] at (\x+\sq/2,\y+\sq/2) {{\Large $W$}};

    \def\x{\bb}
    \def\y{-3*\llb}
    \draw[rounded corners=8pt, draw=black, fill=orange!20] (\x,\y) rectangle (\x+\sq,\y+\sq) ;
    \node[text=black] at (\x+\sq/2,\y+\sq/2) {{\Large $Z$}};

    \def\x{2*\bb}
    \def\y{\ldqlv-1*\llqlv}
    \draw[rounded corners=8pt, draw=black, fill=yellow!20] (\x,\y) rectangle (\x+\sq,\y+\sq) ;
    \node[text=black] at (\x+\sq/2,\y+\sq/2) {{\Large $H$}};
\end{tikzpicture}
        </code>
    </pre>
    <img src="tikz/sm_interactions.svg" alt="Interactions in the Standard Model of particle physics" class="picture-block">
</div>