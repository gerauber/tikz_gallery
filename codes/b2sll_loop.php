\usepackage{tikz}
\usepackage[compat=1.1.0]{tikz-feynman}
...
\begin{tikzpicture}
    \begin{feynman}[small]
        \vertex (a1) {\(b\)}; 
        \vertex[right=1.2cm of a1] (a2);
        \vertex[right=1.6cm of a2] (a3);
        \vertex[right=1.2cm of a3] (a4) {\(s\)};
        \vertex[below=2em of a1] (b1); 
        \vertex[below=2em of a4] (b2);
        \vertex at ($(a2)!0.5!(a3)!1cm!90:(a3)$) (d); 
        \vertex[above=3em of a4] (c1) {\(\ell^{-}\)}; 
        \vertex[above=2em of c1] (c3) {\(\ell^{+}\)}; 
        \vertex at ($(c1)!0.5!(c3) - (1.5cm, 0)$) (c2);
        
        \diagram* {
        (a1) -- [fermion] (a2) -- [fermion, edge label={$u, \, c, \, t$}] (a3) -- [fermion] (a4),
        (c3) -- [fermion] (c2) -- [fermion] (c1), (a2) -- [boson, quarter left, edge label=\(W^{-}\)] (d) -- [boson, quarter left] (a3),
        (d) -- [boson, bend left, edge label={$\gamma, \,  Z^{0}$}] (c2),
        };
    \end{feynman}
\end{tikzpicture}