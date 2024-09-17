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