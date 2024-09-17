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