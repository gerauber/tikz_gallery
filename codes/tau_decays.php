\usepackage{tikz} 
\usepackage[compat=1.1.0]{tikz-feynman}
...
\begin{tikzpicture}[scale=1.2]
    \begin{feynman}
        \vertex (b) {\( \tau^-\)};
        \vertex[below right=0.4cm and 2cm of b] (bs);
        \vertex[right=4cm of b] (s) {\(\nu_\tau\)};
        \vertex[below right=1cm and 0.5cm of bs] (lp);
        \vertex[below right=0.2cm and 1.3cm of lp] (x2) {\( \bar{\nu}_\ell, \, \bar{u}, \, \bar{u}\)};
        \vertex[above right=0.2cm and 1.3cm of lp] (x1) {\( \ell^-, \, s, \, d \)};

        \diagram* {
        (b) -- [fermion] (bs),
        (bs) -- [fermion] (s),
        (bs) --[boson, edge label'=\(\ W^-\)] (lp),
        (x2) -- [fermion] (lp) -- [fermion] (x1),
        };
    \end{feynman}
\end{tikzpicture}
\begin{tikzpicture}[scale=1, every node/.style={transform shape}]
    \begin{feynman}
        \vertex (b) {\( \tau^-\)};
        \vertex[below right=0.4cm and 2cm of b] (bs);
        \vertex[right=4cm of b] (s) {\(\nu_\tau\)};
        %\node[shape=circle,fill=blue] (m) at ( 0, 0) {};
        %\vertex[below right=0.7cm and 0.5cm of bs,blob] (lp) {} ;
        \vertex[below right=0.7cm and 0.5cm of bs] (lp) {} ;
        \vertex[below right=0.2cm and 1.3cm of lp] (x2) {\( \pi\)};
        \vertex[above right=0.2cm and 1.3cm of lp] (x1) {\( \pi^0\)};

        \diagram* {
        (b) -- [fermion] (bs),
        (bs) -- [fermion] (s),
        (bs) --[scalar, edge label'=\(\ W^-\)] (lp),
        (x1) --  (lp) --  (x2),
        };
        \node[circle, minimum size=0.3cm, fill=white] (m) at (lp) {};
        \node[circle, minimum size=0.3cm, draw, pattern=north east lines] (m) at (lp) {};
    \end{feynman}
\end{tikzpicture}